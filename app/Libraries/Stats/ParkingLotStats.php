<?php

namespace App\Libraries\Stats;

use App\Models\ParkingLotModel;

class ParkingLotStats
{
    private $ParkingLotModel;
    private $parking_lots_data;

    public  $number_of_parking_lots;
    public  $capacity_of_parking_lots;
    public  $average_capacity_of_parking_lots;

    public function __construct()
    {
        $this->ParkingLotModel  = new ParkingLotModel;

        $this->setData();

        $this->setNumberOfParkingLots();
        $this->setParkingLotsCapacity();
        $this->setAverageCapacity();
    }

    private function setData()
    {
        $this->parking_lots_data = $this->ParkingLotModel->select('COUNT(id) as number, SUM(capacity) AS capacity, AVG(capacity) AS average')->first();
    }

    private function setNumberOfParkingLots()
    {
        $this->number_of_parking_lots = $this->parking_lots_data->number;
    }

    private function setParkingLotsCapacity()
    {
        $this->capacity_of_parking_lots = $this->parking_lots_data->capacity;
    }

    private function setAverageCapacity()
    {
        $this->average_capacity_of_parking_lots = intval($this->parking_lots_data->average);
    }
}