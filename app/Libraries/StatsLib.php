<?php

namespace App\Libraries;

use App\Models\CountryModel;
use App\Models\UserModel;

use App\Libraries\Stats\CountryStats;
use App\Libraries\Stats\CustomerStats;
use App\Libraries\Stats\WorkOrderStats;
use App\Libraries\Stats\ParkingLotStats;
use App\Libraries\Stats\ParkingLogStats;
use App\Libraries\Stats\UserStats;
use App\Libraries\Stats\VehicleStats;

class Statslib
{
    private $UserModel;

    public $CountryStats;
    public $CustomerStats;
    public $WorkOrderStats;
    public $ParkingLotStats;
    public $ParkingLogStats;
    public $UserStats;
    public $VehicleStats;

    public function __construct($data)
    {
        $this->UserModel        = new UserModel;

        $this->CountryStats     = new CountryStats($data);
        $this->CustomerStats    = new CustomerStats($data);
        $this->WorkOrderStats   = new WorkOrderStats;
        $this->ParkingLotStats  = new ParkingLotStats;
        $this->ParkingLogStats  = new ParkingLogStats;
        $this->UserStats        = new UserStats;
        $this->VehicleStats     = new VehicleStats($data);
    }
}