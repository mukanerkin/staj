<?php

namespace App\Controllers;

/**
 * Authentication Pages
 */
class Authentication extends BaseController
{
    /**
     * Login Page
     * @route_name: page_login
     * @sef_url: /giris
     */
    public function login() : string|\CodeIgniter\HTTP\RedirectResponse
    {
        if($this->request->is('post'))
        {
            if($this->checkLogin())
            {
                return redirect('page_dashboard');
            }
        }
        return view('Pages/Authentication/Login',$this->data);
    }

    /**
     * Checks if user exists
     */
    private function checkLogin() : bool
    {
        $username       = esc($this->request->getPost('username'));
        $password_hash  = sha1($this->request->getPost('password'));

        $user           = $this->UserModel->checkIfUserExists($username, $password_hash);

        if(! $user ) return false;

        $this->session->set('loggedIn', $user);

        return true;
    }

    /**
     * Login Page
     * @route_name: page_logout
     * @sef_url: /cikis
     */
    public function logout() : \CodeIgniter\HTTP\RedirectResponse
    {
        $this->session->destroy();
        return redirect('page_login');
    }
}