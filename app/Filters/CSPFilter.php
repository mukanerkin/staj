<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class CSPFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        /*
        $cspHeader = "default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval'; style-src 'self' 'unsafe-inline'; img-src 'self' data:; font-src 'self';";
        header("Content-Security-Policy: " . $cspHeader);
        header("X-Content-Security-Policy: " . $cspHeader);
        header("X-WebKit-CSP: " . $cspHeader);
        */
        //service('csp')->addStyleSrc('unsafe-inline');
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //service('csp')->addStyleSrc('unsafe-inline');
    }
}