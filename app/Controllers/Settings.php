<?php

namespace App\Controllers;

class Settings extends BaseController
{
    public function index() : string
    {
        if(! $this->data['logged_in_user']->user_level == 'admin' ) return redirect('page_dashboard');
        $this->data['countries']    = $this->CountryModel->findAll();
        return view('Pages/Settings',$this->data);
    }
}
