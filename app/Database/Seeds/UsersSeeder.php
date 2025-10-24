<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username'=>'zulal',
                'password_hash'=>sha1('zulal123'),
                'user_level'=>'admin',
                'first_name'=>'Fatıma Zülâl',
                'last_name'=>'KARAÇAY',
                'email_address'=>'zulal@example.com',
                'phone_number'=>'5550000000'
            ],
            [
                'username'=>'mukanerkin',
                'password_hash'=>sha1('mukan123'),
                'user_level'=>'admin',
                'first_name'=>'Ali',
                'last_name'=>'KARAÇAY',
                'email_address'=>'mukan@example.com',
                'phone_number'=>'5550000001'
            ],
            [
                'username'=>'reception1',
                'password_hash'=>sha1('recep123'),
                'user_level'=>'receptionist',
                'first_name'=>'Reception',
                'last_name'=>'One',
                'email_address'=>'reception@example.com',
                'phone_number'=>'5550000002'
            ],
            [
                'username'=>'valet1',
                'password_hash'=>sha1('valet123'),
                'user_level'=>'valet',
                'first_name'=>'Valet',
                'last_name'=>'One',
                'email_address'=>'valet@example.com',
                'phone_number'=>'5550000003'
            ]
        ];

        foreach($data as $row){
            $this->db->table('users')->insert($row);
        }
    }
}