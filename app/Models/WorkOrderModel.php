<?php

namespace App\Models;

class WorkOrderModel extends BaseModel
{
    protected $returnType     = \App\Entities\WorkOrder::class;

    protected $allowedFields = ['user_id', 'order_type', 'customer_vehicle_id', 'parking_lot_id', 'closed_at'];

    public function __construct()
    {
        parent::__construct();
        $this->table = $this->tables['work_orders'];
    }

    public function getOrderList(int $user_id = 0, string $status = 'all')
    {
        $sql = $this->select("{$this->table}.id, {$this->table}.created_at, {$this->table}.order_type, {$this->table}.closed_at, {$this->tables['users']}.first_name as user_first_name, {$this->tables['users']}.last_name as user_last_name, {$this->tables['users']}.profile_picture as user_picture, {$this->tables['parking_lots']}.name as parking_lot, {$this->tables['customers']}.first_name as customer_first_name, {$this->tables['customers']}.last_name as customer_last_name, {$this->tables['vehicles']}.plate as vehicle_plate, {$this->tables['vehicles']}.brand as vehicle_brand, {$this->tables['vehicles']}.model as vehicle_model")
            ->join($this->tables['users'], "{$this->tables['users']}.id = {$this->table}.user_id")
            ->join($this->tables['parking_lots'], "{$this->tables['parking_lots']}.id = {$this->table}.parking_lot_id")
            ->join($this->tables['customer_vehicles'], "{$this->tables['customer_vehicles']}.id = {$this->table}.customer_vehicle_id")
            ->join($this->tables['customers'], "{$this->tables['customers']}.id = {$this->tables['customer_vehicles']}.customer_id")
            ->join($this->tables['vehicles'], "{$this->tables['vehicles']}.id = {$this->tables['customer_vehicles']}.vehicle_id");
        if($status == 'pending') $sql->where("{$this->table}.closed_at",null);
        else if($status == 'closed') $sql->where("{$this->table}.closed_at !=",null);
        if($user_id) $sql->where("{$this->table}.user_id",$user_id);
        return $sql->orderBy("{$this->table}.id",'ASC')->findAll();
    }
}