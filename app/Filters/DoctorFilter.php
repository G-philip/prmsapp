<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class DoctorFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
      $user = service('auth')->getCurrentUser();
      if ( ! $user->is_doctor) {

            $response = service('response');

            $response->setStatusCode(403);
            $response->setBody('You do not have permission to access that resource');

            return $response;
      }

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
