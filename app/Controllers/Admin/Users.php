<?php

namespace App\Controllers\Admin;

//protected $db;

use App\Entities\Staff;

use App\Entities\Department;

use App\Entities\User;


class Users extends \App\Controllers\BaseController
{
	private $staff_model;
	private $user_model;
	private $department_model;


	public function __construct()
	{
		$this->staff_model = new \App\Models\StaffModel;
		$this->user_model = new \App\Models\UserModel;
		$this->department_model = new \App\Models\DepartmentModel;
		$this->db = db_connect();

	}

	public function index()
	{
       $data = $this->user_model//->join('staff', 'staff.user_id = users.id')
			 													->orderBy('id')
																->paginate(5);
			 											    // ->findAll();

       //$guardian = $this->guardian_model ->findAll();

		return view("Admin/Users/index", [
			'data' => $data,
			'pager' => $this->user_model->pager,
		]);
	}

	public function new()
    {
        $user = new User;
				$staff = new Staff;

				$department = new Department;

        $department = $this->department_model->findAll();

        return view('Admin/Users/new',[
                'user' => $user,
								'staff' => $staff,
								'department' => $department,
            ]);
    }

		public function create()
	{
		$user = new \App\Entities\User($this->request->getPost());

		$model = new \App\Models\UserModel;

		$user->startActivation();

		if ($model->insert($user)) {

				$this->sendActivationEmail($user);

				return redirect()->to("/admin/users/success");

		} else {

				return redirect()->back()
												 ->with('errors', $model->errors())
												 ->with('warning', 'Invalid data')
												 ->withInput();
		}
	}

		// public function create()
    // {
		// 		 $user		= new User($this->request->getPost());
		//
		// 		 // $staff   = new Staff($this->request->getPost());
		// 		 //
		// 		 // $this->db->transStart(); //Begin Transaction
		//
		// 		 $user->startActivation();
		//
		// 		 if ( $this->user_model->protect(false)->save($user)) {
		//
		// 			//$this->sendActivationEmail($user); //remember to remove this
		//
		// 			return redirect()->to("/admin/users/success");
		//
 		// 			// return redirect()->back()
 		// 			// 								 ->with('errors', $this->user_model->errors())
 		// 			// 								 ->with('warning', 'Invalid data')
 		// 			// 								 ->withInput();
 		//     }else{
		// 			return redirect()->back()
 		// 											 ->with('errors', $this->user_model->errors())
 		// 											 ->with('warning', 'Invalid data')
 		// 											 ->withInput();
		// 			//return redirect()->to("/admin/users/success");
		// 											 //->with('info', 'user created successfully');
		// 		}
		//
		// 		// $user_id = $this->user_model->insertID;
		// 		//
		//     // $staff->user_id = $user_id;
		// 		//
		// 		// if ( ! $this->staff_model->save($staff)) {
		// 		//
 		//     //     return redirect()->back()
 		//     //                      ->with('errors', $this->staff_model->errors())
 		//     //                      ->with('warning', 'Invalid data')
 		//     //                      ->withInput();
 		//     // }
		// 		//
		// 		// $this->db->transComplete(); //End Transaction
		// 		//
    //     // if($this->db->transStatus() === TRUE) {
		// 		// 	return redirect()->to("/admin/users/success");
		// 		// 									 //->with('info', 'user created successfully');
    //     // }
    // }

		public function success()
		{
			return view('Admin/Users/success');
		}

	// 	public function show($id, $staff_id)
  //   {
  //       //$patient = $this->getPatientOr404($id);
	//
	// 	$user = $this->user_model ->join('staff', 'staff.user_id = users.id')
	// 														->find($id, $staff_id);
	//
	// 	return view('Admin/Users/show', [
  //           'user' => $user
  //       ]);
	// }
		// public function edit($id, $staff_id)
    //  {
		//
    //      $user = $this->user_model //->join('staff', 'staff.user_id = users.id')
 		// 															 ->find($id);
 		// 		//$user = new User;
		// 		$department = new Department;
		//
    //     $department = $this->department_model->findAll();
		//
    //      return view("Admin/Users/edit", [
    //                          'user' => $user,
		// 												 'department' =>$department,
    //                          ]);
    //  }

		 // public function update($id, $staff_id)
			// {
			// 	$user  = $this->user_model->find($id);
		 //
			// 	$user->fill($this->request->getPost([
			// 		'name', 'email', 'password'
			// 	]));
		 //
			// 	$staff = $this->staff_model->find($staff_id);
		 //
			// 	$staff->fill($this->request->getPost([
			// 		'name','department_id','agreed_salary', 'gender', 'annual_increment',
			// 		'salary_period_from','salary_period_to', 'contact_number', 'user_id',
			// 	]));
		 //
			// 	$this->db->transStart(); //Begin Transaction
		 //
			// 	if (! $staff->hasChanged()) {
		 //
			// 					return redirect()->back()
			// 													 ->with('warning', 'staff has Nothing to update')
			// 													 ->withInput();
			// 			}
		 //
		 //
			// 			if ( ! $this->staff_model->where('staff_id', $staff_id)->save($staff))
			// 			{
		 //
			// 					return redirect()->back()
			// 													 ->with('errors', $this->staff_model->errors())
			// 													 ->with('warning', 'Invalid staff data')
			// 													 ->withInput();
			// 			}
		 //
			// 			if (! $user->hasChanged()) {
		 //
			// 					return redirect()->back()
			// 													 ->with('warning', 'User has Nothing to update')
			// 													 ->withInput();
			// 			}
		 //
			// 			if ( ! $this->user_model->where('id', $id)->save($user)) {
		 //
			// 				return redirect()->back()
			// 												 ->with('errors', $this->user_model->errors())
			// 												 ->with('warning', 'Invalid user data')
			// 												 ->withInput();
			// 			}
		 //
		 //
			// 		 $this->db->transComplete(); //End Transaction
		 //
	   //       if($this->db->transStatus() === TRUE) {
	 		// 			return redirect()->to("/admin/patients")
	 		// 													->with('info', 'Patient created successfully');
	   //       }
	   //  }

		 public function show($id)
	 {
			 $user = $this->getUserOr404($id);

	 return view('Admin/Users/show', [
					 'user' => $user
			 ]);
 }

		 public function edit($id)
	{
		$user = $this->getUserOr404($id);

		return view('Admin/Users/edit', [
            'user' => $user
        ]);
	}

		 public function update($id)
	{
        $user = $this->getUserOr404($id);

				$post = $this->request->getPost();

				//dd($post);

        if (empty($post['password'])) {

            $this->user_model->disablePasswordValidation();

            unset($post['password']);
            unset($post['password_confirmation']);
        }

		$user->fill($post);

		if ( ! $user->hasChanged()) {

            return redirect()->back()
                             ->with('warning', 'Nothing to update')
                             ->withInput();
		}

        if ($this->user_model->protect(false)
														 ->save($user)) {

	        return redirect()->to("/admin/users")
	                         ->with('info', 'User updated successfully');

		} else {

            return redirect()->back()
                             ->with('errors', $this->user_model->errors())
                             ->with('warning', 'Invalid data')
							 						 	->withInput();

		}
	}

			// public function delete($id, $staff_id)
			// {
			// 	//dd($patient_id);
			// 	$user = $this->user_model ->join('staff', 'staff.user_id = users.id')
			// 														->find($id, $staff_id);
			// //dd($patient);
			// 	if ($this->request->getMethod() == 'post') {
			//
			// 		$this->user_model->delete($id);
			// 		$this->staff_model->delete($staff_id);
			//
			// 		 return redirect()->to("/admin/users")
			// 											->with('info', 'User deleted successfully');
			// 	}
			//
			// 	return view("Admin/Users/delete", [
			// 											'user' => $user
			// 											]);
			// }

			public function delete($id)
	{
        $user = $this->getUserOr404($id);

        if ($this->request->getMethod() === 'post') {

            $this->user_model->delete($id);

			return redirect()->to('/admin/users')
                             ->with('info', 'User deleted');
		}

		return view('Admin/Users/delete', [
            'user' => $user
        ]);
	}

			private function getUserOr404($id)
	{
        $user = $this->user_model->where('id', $id)
                            		 ->first();

		if ($user === null) {

			throw new \CodeIgniter\Exceptions\PageNotFoundException("User with id $id not found");

		}

		return $user;
	}

	public function activate($token)
    {
        $model = new \App\Models\UserModel;

        $model->activateByToken($token);

		return view('Admin/Users/activated');
    }

	private function sendActivationEmail($user)
    {
        $email = service('email');

        $email->setTo($user->email);

        $email->setSubject('Account activation');

        $message = view('Admin/Users/activation_email', [
            'token' => $user->token
        ]);

        $email->setMessage($message);

        $email->send();
    }
}
