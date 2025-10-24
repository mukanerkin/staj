<?php

namespace App\Models;

class VehicleModel extends BaseModel
{
    protected $returnType     = \App\Entities\Vehicle::class;

    protected $allowedFields = ['vin', 'plate', 'country_code', 'brand', 'model', 'photo'];

    public function __construct()
    {
        parent::__construct();
        $this->table = $this->tables['vehicles'];
    }

    public function getVehicleList()
    {
        return $this->select("{$this->table}.id, {$this->table}.vin, {$this->table}.country_code, {$this->table}.plate, {$this->table}.brand, {$this->table}.model, {$this->table}.photo, {$this->tables['countries']}.name as country_name")
            ->join($this->tables['countries'], "{$this->tables['countries']}.code_2 = {$this->table}.country_code")
            ->findAll();
    }
}