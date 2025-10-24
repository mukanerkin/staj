<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CustomerVehiclesSeeder extends Seeder
{
    public function run()
    {
        // Örnek customer_id ve vehicle_id değerleri DB'deki sıraya göre
        $data = [
            ['customer_id' => 1, 'vehicle_id' => 1],
            ['customer_id' => 2, 'vehicle_id' => 2]
        ];

        foreach ($data as $row) {
            $this->db->table('customer_vehicles')->insert($row);
        }
    }
}