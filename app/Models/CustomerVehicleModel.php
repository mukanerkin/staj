<?php

namespace App\Models;

class CustomerVehicleModel extends BaseModel
{
    protected $returnType     = \App\Entities\CustomerVehicle::class;

    protected $allowedFields = ['customer_id', 'vehicle_id'];

    public function __construct()
    {
        parent::__construct();
        $this->table = $this->tables['customer_vehicles'];
    }
}