<?php

namespace App\Controllers;

class ParkingLots extends BaseController
{
    public function index() : string|\CodeIgniter\HTTP\RedirectResponse
    {
        if(! $this->data['logged_in_user']->user_level == 'admin') return redirect('page_dashboard');
        $this->data['parking_lots'] = $this->ParkingLotModel->getParkingLotList();
        return view('Pages/ParkingLots', $this->data);
    }

    public function save_parking_lot()
    {
        if(! $this->data['logged_in_user']->user_level == 'admin' ) return redirect('page_dashboard');

        $data = $this->request->getPost();

        $parking_lot = is_null($this->request->getPost('id')) ? new \App\Entities\ParkingLot() : $this->ParkingLotModel->find($data['id']);

        $parking_lot->fill($data);

        try {
            $this->ParkingLotModel->save($parking_lot);
        } catch( \CodeIgniter\Database\Exceptions\DataException $e) {
            // Personelin güncel verisi ile aynı veri gelmiş
            // güncellenecek bilgi yok, hata fırlatmadan devam et
        }

        return redirect('page_parking-lots-management');
    }
}