<?php

namespace App\Models;

class CustomerModel extends BaseModel
{
    protected $returnType     = \App\Entities\Customer::class;

    protected $allowedFields = ['identity_number_hash', 'identity_number_type', 'nationality', 'first_name', 'last_name', 'phone_number', 'email_address', 'created_at'];

    public function __construct()
    {
        parent::__construct();
        $this->table = $this->tables['customers'];
    }

    public function getCustomerList()
    {
        return $this->select("{$this->table}.id, {$this->table}.identity_number_hash, {$this->table}.identity_number_type, {$this->table}.nationality, {$this->table}.first_name, {$this->table}.last_name, {$this->table}.phone_number, {$this->table}.email_address, {$this->tables['countries']}.name as country")
            ->join($this->tables['countries'], "{$this->tables['countries']}.code_2 = {$this->table}.nationality")
            ->findAll();
    }
    
    public function getCustomerCreationData()
    {
        return $this->select('DATE(created_at) AS creation_date, TIME(created_at) AS creation_time, COUNT(id) AS number')->groupBy('DAY(created_at)')->findAll();
    }
}