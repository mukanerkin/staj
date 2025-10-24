<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Install extends Controller
{
    public function index()
    {
        $db     = \Config\Database::connect();
        $forge  = \Config\Database::forge();
        $seeder = \Config\Database::seeder();

        //helper('filesystem');

        $classNames = [
            'Countries',
            'SystemSettings',
            'Users',
            'Customers',
            'Vehicles',
            'CustomerVehicles',
            'ParkingLots',
            'WorkOrders',
            'ParkingLogs'
        ];

        foreach ($classNames as $className) {
            $class = "\App\Database\Migrations\Create{$className}";
            if (class_exists($class)) {
                $m = new $class();
                if($m->up())
                {
                    $seeder->call("{$className}Seeder");
                }
            }
        }

        return redirect('page_dashboard');
    }
}
