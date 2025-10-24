<?php

namespace App\Controllers;

class Vehicles extends BaseController
{
    public function index()
    {
        if(! in_array($this->data['logged_in_user']->user_level, ['admin','receptionist'])) return redirect('page_dashboard');
        $this->data['vehicles']     = $this->VehicleModel->getVehicleList();
        $this->data['countries']    = $this->CountryModel->findAll();
        return view('Pages/Vehicles',$this->data);
    }

    public function add_new()
    {
        if(! in_array($this->data['logged_in_user']->user_level, ['admin','receptionist']) ) return redirect('page_dashboard');

        $data       = $this->request->getPost();
        $data['vin']    = strtoupper($data['vin']);
        $vehicle    = new \App\Entities\Vehicle();
        $vehicle->fill($data);
        $this->VehicleModel->save($vehicle);

        return redirect('page_vehicles-management');
    }

    public function vehicle_search($vin)
    {
        $vehicle = $this->VehicleModel->where('vin',strtoupper($vin))->first();
        if(! is_null($vehicle)){
            return $this->response->setJSON($vehicle);
        }
        return $this->response->setJSON(['vin'=>'0']);
    }
}