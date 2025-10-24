<?php

namespace App\Libraries\Stats;

use App\Models\VehicleModel;

class VehicleStats
{
    private $VehicleModel;
    private $local_country;

    public  $total_number_of_vehicles  = 0;
    public  $number_of_domestic_vehicles = 0;
    public  $number_of_foreign_vehicles = 0;

    public function __construct($data)
    {
        $this->VehicleModel     = new VehicleModel;

        $this->local_country    = $data->local_country;
        $this->setNumbersOfVehicles();
    }

    private function setNumbersOfVehicles()
    {
        $data   = $this->VehicleModel->select('COUNT(id) AS number,country_code')->groupBy('country_code')->findAll();
        foreach($data as $i => $v){
            $this->total_number_of_vehicles += $v->number;
            if($v->country_code == $this->local_country){$this->number_of_domestic_vehicles += $v->number;}
            else{$this->number_of_foreign_vehicles += $v->number;}
        }
    }
}