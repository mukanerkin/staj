<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthenticationFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $router = service('router');
        $controller = $router->controllerName();
        $method = $router->methodName();
        if(($controller == '\App\Controllers\Authentication') && ($method == 'login')){
            if ( session()->has('loggedIn')) {
                return redirect('page_dashboard');
            }
        }else{
            if (! session()->has('loggedIn')) {
                return redirect('page_login');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        /*
        $auth = service('auth');

        if (! $auth->isLoggedIn()) {
            return redirect()->to(site_url('login'));
        }
        */
    }
}