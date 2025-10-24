<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class WorkOrdersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'customer_vehicle_id' => 1,
                'user_id' => 1, // resepsiyonist
                'parking_lot_id' => 1,
                'order_type' => 'park'
            ],
            [
                'customer_vehicle_id' => 2,
                'user_id' => 2,
                'parking_lot_id' => 2,
                'order_type' => 'park'
            ]
        ];

        foreach ($data as $row) {
            $this->db->table('work_orders')->insert($row);
        }
    }
}