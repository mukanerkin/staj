<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Services\IdentityService;

class CustomersSeeder extends Seeder
{
    public function run()
    {
        $identityService = new IdentityService();

        $data = [
            [
                'identity_number_hash'  => $identityService->encryptIdentity('12345678901'),
                'identity_number_type'  => 'id_card',
                'first_name'            => 'Fatıma Zülâl',
                'last_name'             => 'KARAÇAY',
                'nationality'           => 'tr',
                'phone_number'          => '5551111111',
                'email_address'         => 'zulalkaracay@gmail.com'
            ],
            [
                'identity_number_hash'  => $identityService->encryptIdentity('12345678902'),
                'identity_number_type'  => 'id_card',
                'first_name'            => 'Ali',
                'last_name'             => 'KARAÇAY',
                'nationality'           => 'tr',
                'phone_number'          => '5551111111',
                'email_address'         => 'alikaracay@gmail.com'
            ],
            [
                'identity_number_hash'  => $identityService->encryptIdentity('12345678903'),
                'identity_number_type'  => 'id_card',
                'first_name'            => 'Murat',
                'last_name'             => 'KARAÇAY',
                'nationality'           => 'tr',
                'phone_number'          => '5551111111',
                'email_address'         => 'muratkaracay@gmail.com'
            ],
            [
                'identity_number_hash'  => $identityService->encryptIdentity('US987654321'),
                'identity_number_type'  => 'passport',
                'first_name'            => 'John',
                'last_name'             => 'DOE',
                'nationality'           => 'us',
                'phone_number'          => '5552222222',
                'email_address'         => 'john@doe.com'
            ]
        ];

        foreach ($data as $row) {
            $this->db->table('customers')->insert($row);
        }
    }
}