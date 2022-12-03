<?php

namespace App\Controllers\Admin;

//use App\Entities\Guardian;


class Home extends \App\Controllers\BaseController
{
  public function index()
  {
       return view("Admin/Home/index");
  }

  public function testEmail()
	{
        $email = service('email');

        $email->setTo('philchege73@gmail.com');

        $email->setSubject('A test email');

        $email->setMessage('<h1>Test Email</h1>');

        if ($email->send()) {

            echo "Message sent";

		} else {

            echo $email->printDebugger();

		}
	}
}
