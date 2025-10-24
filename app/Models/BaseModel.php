<?php

namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model
{
    protected $tables = [
        'countries'         => 'countries',
        'users'             => 'users',
        'parking_lots'      => 'parking_lots',
        'customers'         => 'customers',
        'vehicles'          => 'vehicles',
        'customer_vehicles' => 'customer_vehicles',
        'work_orders'       => 'work_orders',
        'system_settings'   => 'system_settings',
        'parking_logs'      => 'parking_logs',
        ];

    protected $table;
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}