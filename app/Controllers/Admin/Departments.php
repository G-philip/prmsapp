<?php

namespace App\Controllers\Admin;

use App\Entities\Department;

class Departments extends \App\Controllers\BaseController
{

	private $department_model;

	private $current_user;

	public function __construct()
	{
		$this->department_model = new \App\Models\DepartmentModel;

		$this->current_user = service('auth')->getCurrentUser();
	}

	public function index()
	{
			 $data = $this->department_model->paginateDepartmentsByUserId($this->current_user->id);

       // $data = $this->department_model->paginate(5);

				return view("Admin/Departments/index", [
					'data' => $data,
					'pager' => $this->department_model->pager,
				]);
	}

	public function show($id)
    {
        $department = $this->getDepartmentOr404($id);

		return view('Admin/Departments/show', [
            'department' => $department
        ]);
	}

	public function create()
    {
				 $department	= new Department($this->request->getPost());

				 $department->user_id = $this->current_user->id;

				if ( $this->department_model->save($department)) {
						return redirect()->to("/admin/department/success");

 		    }else{

					return redirect()->back()
													 ->with('errors', $this->department_model->errors())
													 ->with('warning', 'Invalid data')
													 ->withInput();
        }
    }

		public function success()
		{
			return view('Admin/Departments/success');
		}

		public function edit($id)
		{
			// $department = $this->getTaskOr404($id);
			$department = $this->department_model->where('id', $id)->findAll();
				foreach ($department as $data){
					 $data->{'department_id'} =	$data->id;
					 $data->{'department_name'} =	$data->department_name;
					 $data->{'department_description'} =	$data->department_description;
				 }
				 echo json_encode($data);
		}

		 public function update()
			{

				$id	=	$this->request->getPost('department_id');

				$department  = $this->getDepartmentOr404($id);

				$post = $this->request->getPost();
				unset($post['user_id']);

				$department->fill($post);

				// $department->fill($this->request->getPost([
				// 	'department_name','department_description'
				// ]));

				if ( ! $department->hasChanged()) {

					return redirect()->back()
													 ->with('warning', 'Nothing to update')
													 ->withInput();
				}

				if ($this->department_model->save($department)) {

					return redirect()->to("/admin/department")
															->with('info', 'Department updated successfully');
				}else {

					return redirect()->back()
													 ->with('errors', $this->department_model->errors())
													 ->with('warning', 'Invalid data')
													 ->withInput();
				}
	    }

			public function delete()
			{
				$id	=	$this->request->getPost('delete_id');

				$department = $this->getDepartmentOr404($id);

				if ($this->request->getMethod() == 'post') {

					$this->department_model->delete($id);

					 return redirect()->to("/admin/department")
										->with('danger', 'Department deleted successfully');
				}
			}

			private function getDepartmentOr404($id)
  				{
										/*
						$task = $this->model->find($id);

						if ($task !== null && ($task->user_id !== $user->id)) {

							$task = null;

						}
						*/

        		$department = $this->department_model->getDepartmentByUserId($id, $this->current_user->id);
						//$department = $this->department_model->find($id);

  					if ($department === null) {

  						throw new \CodeIgniter\Exceptions\PageNotFoundException("Department with id $id not found");

  					}

  					return $department;
  				}
}
