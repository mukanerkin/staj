<?php

namespace App\Controllers;

use App\Services\IdentityService;

class Customers extends BaseController
{
    public function index()
    {
        if(! in_array($this->data['logged_in_user']->user_level, ['admin','receptionist']) ) return redirect('page_dashboard');

        $this->data['customers']    = $this->CustomerModel->getCustomerList();
        $this->data['countries']    = $this->CountryModel->findAll();

        return view('Pages/Customers',$this->data);
    }

    public function add_new()
    {
        if(! in_array($this->data['logged_in_user']->user_level, ['admin','receptionist']) ) return redirect('page_dashboard');

        $data = $this->request->getPost();

        $IdentityService = new IdentityService();
        $data['identity_number_hash']   = $IdentityService->encryptIdentity( strtoupper($data['identity_number_hash']) );

        $customer       = new \App\Entities\Customer();
        $customer->fill($data);
        $this->CustomerModel->save($customer);

        return redirect('page_customers-management');
    }

    public function customer_search($identity_number)
    {
        $IdentityService = new IdentityService();
        $customers = $this->CustomerModel->getCustomerList();
        foreach($customers as $customer)
        {
            $customer->identity_number = $IdentityService->decryptIdentity($customer->identity_number_hash);
            if($customer->identity_number == strtoupper($identity_number)){
                return $this->response->setJSON($customer);
            }
        }
        return $this->response->setJSON(['id'=>'0']);
    }
}