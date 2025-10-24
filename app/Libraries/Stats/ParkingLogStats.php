<?php

namespace App\Libraries\Stats;

use App\Models\ParkingLogModel;

class ParkingLogStats
{
    private $ParkingLogModel;

    public  $number_of_parked_vehicles;

    public function __construct()
    {
        $this->ParkingLogModel  = new ParkingLogModel;

        $this->setNumberOfParkedVehicles();
    }

    private function setNumberOfParkedVehicles()
    {
        $this->number_of_parked_vehicles    = $this->ParkingLogModel->where('retrieve_time',NULL)->countAllResults();
    }
}