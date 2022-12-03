<?php

namespace App\Controllers\Admin;

//protected $db;

use App\Entities\Category;

class Categories extends \App\Controllers\BaseController
{
	private $category_model;

	public function __construct()
	{
		$this->category_model = new \App\Models\CategoryModel;
	}

	public function index()
	{
       $data = $this->category_model->findAll();

       //$guardian = $this->guardian_model ->findAll();

		return view("Admin/Categories/index", [
			'data' => $data
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
				$category		= new Category($this->request->getPost());

				if ( $this->category_model->save($category)) {

					return redirect()->to("/admin/expense/categories/success");
													 //->with('info', 'user created successfully');
 		    }else{

					return redirect()->back()
													 ->with('errors', $this->category_model->errors())
													 ->with('warning', 'Invalid data')
													 ->withInput();
        }
    }

		public function success()
		{
			return view('Admin/Categories/success');
		}

		 public function update()
			{
				$id	=	$this->request->getPost('category_id');

				$category = $this->category_model->find($id);

				$category->fill($this->request->getPost([
				 'category_name','category_description'
			 ]));

				if (! $category->hasChanged()) {

								return redirect()->back()
																 ->with('warning', ' Nothing to update')
																 ->withInput();
						}

						if ( $this->category_model->save($category))
						{
							return redirect()->to("/admin/expense/categories")
		 													 ->with('info', 'Expense category updated successfully');
						}else{

							return redirect()->back()
															 ->with('errors', $this->category_model->errors())
															 ->with('warning', 'Invalid data')
															 ->withInput();
	         }
	    }

			public function deleteData($id)
			{
				$category = $this->category_model->where('id', $id)->findAll();

				foreach ($category as $data) {
					$data->{'category_id'} =	$data->id;
					$data->{'category_name'} =	$data->category_name;
					$data->{'category_description'} =	$data->category_description;
				}
				echo json_encode($data);
			}

			public function delete()
			{
				$id = $this->request->getPost('category_id');

				$category = $this->category_model->find($id);

				if ($this->request->getMethod() == 'post') {

					$this->category_model->delete($id);

					 return redirect()->to("/admin/expense/categories")
										->with('info', 'Expense Category deleted successfully');
				}

				// return view("Admin/Staff/delete", [
				// 										'staff' => $staff
				// 										]);
			}
}
