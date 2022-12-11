<?php

namespace App\Controllers\Admin;

//protected $db;

use App\Entities\Notification;

class Notifications extends \App\Controllers\BaseController
{
	private $notifications_model;

	public function __construct()
	{
		$this->notifications_model = new \App\Models\NotificationsModel;
	}

	public function index()
	{
       $data = $this->notifications_model->findAll();

			 return view("Admin/Notifications/index", [
				 'data'	=> $data
			 ]);
	}

	public function new()
    {
        $notification_message = new Notification;

        return view('Admin/Notifications/new', [
					'noticeboard_message' => $notification_message
				]);
    }

		public function create()
    {
				$notification_message		= new Notification($this->request->getPost());

				if ( $this->notifications_model->save($notification_message)) {

					return redirect()->to("/admin/notifications/success");
													 //->with('info', 'user created successfully');
 		    }else{

					return redirect()->back()
													 ->with('errors', $this->notifications_model->errors())
													 ->with('warning', 'Invalid data')
													 ->withInput();
        }
    }

		public function success()
		{
			return view('Admin/Notifications/success');
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
