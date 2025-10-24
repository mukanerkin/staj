<?php

namespace App\Libraries\Stats;

use App\Models\CustomerModel;
use CodeIgniter\I18n\Time;

class CustomerStats
{
    private $CustomerModel;
    private $today;
    private $yesterday;
    private $customers;
    private $local_country;

    public  $customer_creation_data;
    public  $total_number_of_customers  = 0;
    public  $number_of_domestic_customers = 0;
    public  $number_of_foreign_customers = 0;
    public  $number_of_new_customers_today;
    public  $number_of_new_customers_yesterday;
    public  $new_customers_compared_to_yesterday;

    public function __construct($data)
    {
        $this->CustomerModel    = new CustomerModel;

        $this->local_country    = $data->local_country;
        $this->today            = Time::parse('today')->toDateString();
        $this->yesterday        = Time::parse('yesterday')->toDateString();
        $this->getAllCustomers();
        $this->setCustomerCreationData();

        // Stats Data
        $this->setNumbersOfCustomers();
        $this->arrangeCustomersByRegistrationDate();
        $this->populateCustomerCreationData();
        $this->number_of_new_customers_today        = $this->customer_creation_data[$this->today];
        $this->number_of_new_customers_yesterday    = $this->customer_creation_data[$this->yesterday];
        $this->new_customers_compared_to_yesterday  = $this->number_of_new_customers_today - $this->number_of_new_customers_yesterday;
    }

    private function getAllCustomers()
    {
        $this->customers    = $this->CustomerModel->findColumn('created_at');
    }

    public function setCustomerCreationData()
    {
        $this->customer_creation_data = $this->CustomerModel->getCustomerCreationData();
    }

    private function setNumbersOfCustomers()
    {
        $data   = $this->CustomerModel->select('COUNT(id) AS number,nationality')->groupBy('nationality')->findAll();
        foreach($data as $i => $v){
            $this->total_number_of_customers += $v->number;
            if($v->nationality == $this->local_country){$this->number_of_domestic_customers += $v->number;}
            else{$this->number_of_foreign_customers += $v->number;}
        }
    }

    private function arrangeCustomersByRegistrationDate()
    {
        foreach($this->customer_creation_data as $i => $customer_data){
            $this->customer_creation_data[$customer_data->creation_date] = $customer_data->number;
            unset($this->customer_creation_data[$i]);
        }
    }

    private function dailyCustomersCount($day)
    {
        return $this->CustomerModel->like('created_at',$day,'after')->countAllResults();
    }

    private function populateCustomerCreationData($from = false,$to = false)
    {
        $from       = $from ?: Time::parse('-30 days');
        $to         = $to ?: Time::parse('today');
        $difference = $from->difference($to)->getDays();
        
        for($i = 0; $i <= $difference; $i++){
            $index = Time::parse("-{$i} days")->toDateString();
            $this->customer_creation_data[$index] ??= 0;
        }
        ksort($this->customer_creation_data);
    }
}