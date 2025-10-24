<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class VehiclesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'vin' => '1HGBH41JXMN109186',
                'plate' => '34ABC123',
                'country_code' => 'tr',
                'brand' => 'Toyota',
                'model' => 'Corolla'
            ],
            [
                'vin' => '1HGCM82633A004352',
                'plate' => 'USXYZ987',
                'country_code' => 'us',
                'brand' => 'Honda',
                'model' => 'Civic'
            ]
        ];

        foreach ($data as $row) {
            $this->db->table('vehicles')->insert($row);
        }
    }
}