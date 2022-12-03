<?php

namespace App\Controllers\Admin;

//protected $db;

use App\Entities\Staff;

use App\Entities\Department;

class Staffs extends \App\Controllers\BaseController
{
	private $staff_model;
	private $department_model;

	public function __construct()
	{
		$this->staff_model = new \App\Models\StaffModel;
		$this->department_model = new \App\Models\DepartmentModel;
		$this->db = db_connect();

	}

	public function index()
	{
       $data = $this->staff_model->join('department', 'department.id = staff.department_id')
			 											    ->findAll();

       //$guardian = $this->guardian_model ->findAll();

		return view("Admin/Staff/index", [
			'data' => $data
		]);
	}

	public function new()
    {
				$staff = new Staff;

				$department = new Department;

        $department = $this->department_model->findAll();

        return view('Admin/Staff/new',[
								'staff' => $staff,
								'department' => $department,
            ]);
    }

		public function create()
    {
				 $staff   = new Staff($this->request->getPost());

				 if ( $this->staff_model->save($staff))
				 {

					 return redirect()->to("/admin/staff/success");

 		    }else{
					return redirect()->back()
 													 ->with('errors', $this->staff_model->errors())
 													 ->with('warning', 'Invalid data')
 													 ->withInput();
				}
    }

		public function success()
		{
			return view('Admin/Staff/success');
		}

		public function show($staff_id)
    {
        //$patient = $this->getPatientOr404($id);

		$staff = $this->staff_model->find($staff_id);

		return view('Admin/Staff/show', [
            'staff' => $staff
        ]);
	}

		public function edit($staff_id)
     {

         $staff = $this->staff_model->find($staff_id);
 				//$user = new User;
				$department = new Department;

        $department = $this->department_model->findAll();

         return view("Admin/Staff/edit", [
                             'staff' => $staff,
														 'department' =>$department,
                             ]);
     }

		 public function update($staff_id)
			{
				$staff = $this->staff_model->find($staff_id);

				$staff->fill($this->request->getPost([
					'name','department_id','agreed_salary', 'gender', 'annual_increment',
					 'contact_number', 'user_id',
				]));


				if (! $staff->hasChanged()) {

								return redirect()->back()
																 ->with('warning', 'Nothing to update')
																 ->withInput();
						}


						if ( $this->staff_model->where('staff_id', $staff_id)
																	 ->save($staff))
						{

							return redirect()->to("/admin/staff")
		 															->with('info', 'staff updated successfully');
						}else{

							return redirect()->back()
															 ->with('errors', $this->staff_model->errors())
															 ->with('warning', 'Invalid data')
															 ->withInput();
	         }
	    }

			public function delete($staff_id)
			{
				//dd($patient_id);
				$staff = $this->staff_model->find($staff_id);
			//dd($patient);
				if ($this->request->getMethod() == 'post') {

					$this->staff_model->delete($staff_id);

					 return redirect()->to("/admin/staff")
										->with('info', 'staff deleted successfully');
				}

				return view("Admin/Staff/delete", [
														'staff' => $staff
														]);
			}
}
