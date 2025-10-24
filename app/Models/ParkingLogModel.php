<?php

namespace App\Models;

class ParkingLogModel extends BaseModel
{
    protected $returnType     = \App\Entities\ParkingLog::class;

    protected $allowedFields = ['work_order_id_enter', 'work_order_id_exit', 'retrieve_time'];

    public function __construct()
    {
        parent::__construct();
        $this->table = $this->tables['parking_logs'];
    }

    public function getParkingLogList()
    {
        $sql = $this->select("
            {$this->table}.id,
            {$this->table}.created_at,
            OrderEnter.closed_at AS parked_at,
            OrderEnter.customer_vehicle_id,
            OrderEnter.parking_lot_id,
            OrderExit.id AS retrieve_order,
            OrderExit.closed_at AS retrieve_order_closed,
            CONCAT_WS(' ', {$this->tables['customers']}.first_name, {$this->tables['customers']}.last_name) AS customer_fullname,
            CONCAT_WS(' ', {$this->tables['vehicles']}.brand, {$this->tables['vehicles']}.model) AS vehicle_name,
            {$this->tables['vehicles']}.vin AS vehicle_vin,
            {$this->tables['vehicles']}.plate AS vehicle_plate,
            CONCAT_WS(' ', {$this->tables['users']}.first_name, {$this->tables['users']}.last_name) AS user_fullname,
            {$this->tables['users']}.profile_picture AS user_profile_picture,
            {$this->tables['parking_lots']}.name AS parking_lot
        ")
        ->join("{$this->tables['work_orders']} AS OrderEnter", "OrderEnter.id = {$this->table}.work_order_id_enter", "left")
        ->join("{$this->tables['work_orders']} AS OrderExit", "OrderExit.customer_vehicle_id = OrderEnter.customer_vehicle_id AND OrderExit.order_type = 'retrieve'", "left")
        ->join("{$this->tables['users']}", "{$this->tables['users']}.id = OrderEnter.user_id", "left")
        ->join("{$this->tables['customer_vehicles']}", "{$this->tables['customer_vehicles']}.id = OrderEnter.customer_vehicle_id", "left")
        ->join("{$this->tables['customers']}", "{$this->tables['customers']}.id = {$this->tables['customer_vehicles']}.customer_id", "left")
        ->join("{$this->tables['vehicles']}", "{$this->tables['vehicles']}.id = {$this->tables['customer_vehicles']}.vehicle_id", "left")
        ->join("{$this->tables['parking_lots']}", "{$this->tables['parking_lots']}.id = OrderEnter.parking_lot_id", "left")
        ->where("{$this->table}.retrieve_time", NULL)
        ->orderBy("retrieve_order_closed","DESC")
        ->orderBy("retrieve_order","DESC");
        return $sql->findAll();
    }
}