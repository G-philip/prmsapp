<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function new()
    {
		return view('Login/new');
    }

    public function create()
    {
		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');
		$remember_me = (bool) $this->request->getPost('remember_me');
//dd($remember_me);
        $auth = service('auth');

        if ($auth->login($email, $password, $remember_me)) {

          $admin_redirect_url = session('redirect_url') ?? 'admin/home';

          $doctor_redirect_url = session('redirect_url') ?? 'doctor/home';

			unset($_SESSION['redirect_url']);

      $user = service('auth')->getCurrentUser();//find user logging in based on user_id then redirect to the requested page

      if ($user->is_doctor) {

        return redirect()->to($doctor_redirect_url)
                         ->with('info', 'Login successful')
                         ->withCookies();

        }elseif ($user->is_admin) {

        return redirect()->to($admin_redirect_url)
                        ->with('info', 'Login successful')
                        ->withCookies();

     }
        } else {

            return redirect()->back()
                             ->withInput()
                             ->with('warning', 'Invalid login');
        }
    }

    public function delete()
    {
        service('auth')->logout();

        return redirect()->to('/show/message')
                         ->withCookies();
    }

    public function showLogoutMessage()
    {
        return redirect()->to('/')
                         ->with('info', 'Logout successful');
    }
}
