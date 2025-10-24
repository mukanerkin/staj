<?php

namespace App\Controllers;

use CodeIgniter\Files\File;

class Staffs extends BaseController
{
    public function index()
    {
        if(! $this->data['logged_in_user']->user_level == 'admin' ) return redirect('page_dashboard');
        $this->data['users']    = $this->UserModel->findAll();
        return view('Pages/Staffs', $this->data);
    }

    public function save_user()
    {
        if(! $this->data['logged_in_user']->user_level == 'admin' ) return redirect('page_dashboard');

        $data = $this->request->getPost();

        if( ($data['password'] == $data['password_confirm']) && (! empty($data['password'])) ){
            $data['password_hash'] = sha1($data['password']);
        }
        unset($data['password']);
        unset($data['password_confirm']);

        $user = is_null($this->request->getPost('id')) ? new \App\Entities\User() : $this->UserModel->find($data['id']);

        $profile_picture = $this->setProfilePicture();
        if(!is_null($profile_picture)){
            if( isset($user->profile_picture) && file_exists( FCPATH . 'uploads/staff/profile_pictures/' . $user->profile_picture . '.webp' ) ){unlink( FCPATH . 'uploads/staff/profile_pictures/' . $user->profile_picture . '.webp' );}
            $data['profile_picture'] = $profile_picture;
        }

        $user->fill($data);
        try {
            $this->UserModel->save($user);
        } catch( \CodeIgniter\Database\Exceptions\DataException $e) {
            // Personelin güncel verisi ile aynı veri gelmiş
            // güncellenecek bilgi yok, hata fırlatmadan devam et
        }

        return redirect('page_staffs-management');
    }

    private function setProfilePicture()
    {

        $profile_picture_name = sha1(time());

        if ($img = $this->request->getFile('profile_picture')) {
            if ($img->isValid() && (! $img->hasMoved())) {
                $newName = $img->getRandomName();
                if($img->move(WRITEPATH . 'uploads', $newName))
                {
                    try {
                        service('image')->withFile(WRITEPATH . 'uploads/' . $newName)->fit(500, 500, 'center')->convert(IMAGETYPE_WEBP)->save(FCPATH. 'uploads/staff/profile_pictures/'. $profile_picture_name . '.webp' );
                        unlink(WRITEPATH . 'uploads/' . $newName);
                        return $profile_picture_name;
                    } catch (\CodeIgniter\Images\Exceptions\ImageException $e) {
                        unlink(WRITEPATH . 'uploads/' . $newName);
                    }
                }
            }
        }
        return null;
    }
}