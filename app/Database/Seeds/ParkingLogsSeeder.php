<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ParkingLogsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'work_order_id_enter' => 1,
                'enter_time' => date('Y-m-d H:i:s')
            ],
            [
                'work_order_id_enter' => 2,
                'enter_time' => date('Y-m-d H:i:s')
            ]
        ];

        foreach ($data as $row) {
            $this->db->table('parking_logs')->insert($row);
        }
    }
}