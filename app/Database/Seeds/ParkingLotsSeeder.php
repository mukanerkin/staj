<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ParkingLotsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'=>'Indoor Lot 1',
                'address'=>'123 Main St',
                'latitude'=>41.0082,
                'longitude'=>28.9784,
                'type'=>'indoor',
                'capacity'=>50,
                'area'=>1000
            ],
            [
                'name'=>'Outdoor Lot 1',
                'address'=>'456 Side Rd',
                'latitude'=>41.0151,
                'longitude'=>28.9795,
                'type'=>'outdoor',
                'capacity'=>100,
                'area'=>2500
            ]
        ];

        foreach($data as $row){
            $this->db->table('parking_lots')->insert($row);
        }
    }
}