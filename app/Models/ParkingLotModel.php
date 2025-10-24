<?php

namespace App\Models;

class ParkingLotModel extends BaseModel
{
    protected $returnType     = \App\Entities\ParkingLot::class;

    protected $allowedFields = ['latitude', 'longitude', 'name', 'address', 'type', 'capacity', 'area'];

    public function __construct()
    {
        parent::__construct();
        $this->table = $this->tables['parking_lots'];
    }

    public function getParkingLotList()
    {
        $sql = $this->select("{$this->table}.id, {$this->table}.name, {$this->table}.latitude, {$this->table}.longitude, {$this->table}.address, {$this->table}.type, {$this->table}.capacity, {$this->table}.area")
            ->selectCount("{$this->tables['parking_logs']}.id","total_occupation")
            ->join($this->tables['work_orders'], "{$this->tables['work_orders']}.parking_lot_id = {$this->table}.id", "left")
            ->join($this->tables['parking_logs'], "{$this->tables['parking_logs']}.work_order_id_enter = {$this->tables['work_orders']}.id AND {$this->tables['parking_logs']}.retrieve_time IS NULL", "left")
            ->groupBy("{$this->table}.id");;
        return $sql->findAll();
    }
}