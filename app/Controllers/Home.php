<?php

namespace App\Controllers;

use App\Libraries\StatsLib;

class Home extends BaseController
{
    private $Stats;

    public function index() : string
    {
        $this->data['pending_work_orders']  = ($this->data['logged_in_user']->user_level == 'valet') ? $this->WorkOrderModel->getOrderList($this->data['logged_in_user']->id,'pending') : $this->WorkOrderModel->getOrderList(0,'pending');

        $stats_data = (object)['logged_in_user'=>$this->data['logged_in_user'],'local_country'=>$this->data['SystemSettings']->localization_systemCountry->value];
        $this->Stats = new StatsLib($stats_data);

        $this->data['WorkOrderStats']   = $this->Stats->WorkOrderStats;
        $this->data['CountryStats']     = $this->Stats->CountryStats;
        $this->data['CustomerStats']    = $this->Stats->CustomerStats;
        $this->data['ParkingLotStats']  = $this->Stats->ParkingLotStats;
        $this->data['ParkingLogStats']  = $this->Stats->ParkingLogStats;
        $this->data['UserStats']        = $this->Stats->UserStats;
        $this->data['VehicleStats']     = $this->Stats->VehicleStats;

        $this->data['parking_logs'] = $this->ParkingLogModel->getParkingLogList();

        return view('Pages/Admin/Dashboard',$this->data);
    }
}
