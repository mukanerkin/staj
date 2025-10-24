<?php

namespace App\Libraries\Stats;

use App\Models\BaseModel;
use App\Models\CountryModel;
use App\Models\CustomerModel;
use App\Models\VehicleModel;
use CodeIgniter\I18n\Time;

class CountryStats
{
    private $CountryModel;
    private $CustomerModel;
    private $VehicleModel;
    private $today;
    private $yesterday;
    private $local_country;

    public  $countries_map_data;

    public function __construct($data)
    {
        $this->BaseModel        = new BaseModel;
        $this->CountryModel     = new CountryModel;
        $this->CustomerModel    = new CustomerModel;
        $this->VehicleModel     = new VehicleModel;

        $this->local_country    = $data->local_country;
        $this->today            = Time::parse('today')->toDateString();
        $this->yesterday        = Time::parse('yesterday')->toDateString();

        $this->getCountriesMapData();
    }

    public function getCountriesMapData()
    {
        $tables             = $this->BaseModel->tables;
        $countries_table    = $this->BaseModel->tables['countries'];
        $customers_table    = $this->BaseModel->tables['customers'];
        $vehicles_table     = $this->BaseModel->tables['vehicles'];

        $countries_map_data   = $this->CountryModel->select("COUNT( DISTINCT {$customers_table}.id ) AS customer_count, COUNT( DISTINCT {$vehicles_table}.id) AS vehicle_count, {$countries_table}.code_2, {$countries_table}.name")
                    ->join($customers_table,"{$customers_table}.nationality = {$countries_table}.code_2","left")
                    ->join($vehicles_table,"{$vehicles_table}.country_code = {$countries_table}.code_2","left")
                    ->groupBy("{$countries_table}.code_2")
                    ->orderBy("{$countries_table}.code_2")
                    ->findAll();

        foreach ($countries_map_data as $row) {
            $this->countries_map_data[strtoupper($row->code_2)] = [
                'name'      => $row->name,
                'customers' => (int)$row->customer_count,
                'vehicles'  => (int)$row->vehicle_count,
                'total'     => (int)$row->customer_count + (int)$row->vehicle_count
            ];
        }

        $this->countries_map_data = json_encode($this->countries_map_data);
    }
}