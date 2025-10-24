<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SystemSettingsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'setting_key' => 'core_applicationName',
                'setting_value' => 'ValeMaster',
                'description' => 'Uygulama adı'
            ],
            [
                'setting_key' => 'core_systemCountry',
                'setting_value' => 'tr',
                'description' => 'Sistem varsayılan ülke'
            ],
            [
                'setting_key' => 'pricing_hourlyRate',
                'setting_value' => '25',
                'description' => 'Saatlik vale hizmet bedeli (TL)'
            ],
            [
                'setting_key' => 'vale_max_distance',
                'setting_value' => '3',
                'description' => 'Vale hizmeti maksimum mesafe (km)'
            ],
            [
                'setting_key' => 'free_parking_signage',
                'setting_value' => '1',
                'description' => 'Ücretsiz otopark tabelasının gösterimi'
            ]
        ];

        $this->db->table('system_settings')->insertBatch($data);
    }
}