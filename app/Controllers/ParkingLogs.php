<?php

namespace App\Controllers;

class ParkingLogs extends BaseController
{
    public function index() : string|\CodeIgniter\HTTP\RedirectResponse
    {
        if(! in_array($this->data['logged_in_user']->user_level, ['admin','receptionist']) ) return redirect('page_dashboard');

        $this->data['parking_logs'] = $this->ParkingLogModel->getParkingLogList();
        $this->data['countries']    = $this->CountryModel->findAll();
        $this->data['parking_lots'] = $this->ParkingLotModel->getParkingLotList();
        $this->data['users']        = $this->UserModel->orderBy('user_level','DESC')->orderBy('first_name','ASC')->findAll();
        return view('Pages/ParkingLogs', $this->data);
    }

    public function save_parking_log()
    {
        if(! in_array($this->data['logged_in_user']->user_level, ['admin','receptionist']) ) return redirect('page_dashboard');

        $data = $this->request->getPost();

        $parking_lot = is_null($this->request->getPost('id')) ? new \App\Entities\ParkingLog() : $this->ParkingLogModel->find($data['id']);

        $parking_lot->fill($data);

        try {
            $this->ParkingLogModel->save($parking_lot);
        } catch( \CodeIgniter\Database\Exceptions\DataException $e) {
            // Personelin güncel verisi ile aynı veri gelmiş
            // güncellenecek bilgi yok, hata fırlatmadan devam et
        }

        return redirect('page_parking-logs');
    }

    public function approve_retrieve()
    {
        $parking_log    = $this->ParkingLogModel->find($this->request->getPost('id'));
        $parking_log->retrieve_time  = date('Y-m-d H.i:s');
        $this->ParkingLogModel->save($parking_log);
        return redirect('page_parking-logs');
        
    }
}