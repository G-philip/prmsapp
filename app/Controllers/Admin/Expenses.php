<?php

namespace App\Controllers\Admin;

use App\Entities\Expense;
use App\Entities\Category;

class Expenses extends \App\Controllers\BaseController
{
	private $model;

	private $category_model;

	public function __construct()
	{
        $this->model = new \App\Models\ExpenseModel;

				$this->category_model = new \App\Models\CategoryModel;
	}

	public function index()
	{
		$expenses = $this->model->select('*, Month(created_at) AS month')
														->select('monthname(created_at) As monthname')
														->select('Year(created_at) As year')
														//->sortBy('month')
														->orderBy("Month(created_at)" , 'desc')
														->findAll();


		$totals =$this->model->selectSum('amount')
												 ->select('Month(created_at)')
												 ->select('monthname(created_at) As monthname')
												 ->groupBy("Month(created_at)")
												 ->findAll();

					 //$month_totals = json_decode(json_encode($month_totals), FALSE);

					 $month_totals = (object)[0];

						foreach ($totals as $value) {
								$month = $value->{"Month(created_at)"};
								$month_totals->$month = $value->amount;
						}

		$total_expenses= $this->model->selectSum('amount')
													->findAll();
//dd($expenses);
		return view("Admin/Expenses/index", [
				'expenses' => $expenses,
				'totals'    => $totals,
				'month_totals' => $month_totals,
				'total_expenses' =>$total_expenses
			]);
	}

	public function show($id)
    {

        $expense  = $this->getExpenseOr404($id);

				return view('Admin/Expenses/show', [
		            'expense' => $expense
		        ]);
	}

	public function new()
	{
        $expense = new Expense;

				//$category = new Category;



				$category  =  $this->category_model->findAll();

				return view('Admin/Expenses/new', [
				    'expense' => $expense,
						'category' => $category
		        ]);
	}

	public function create()
	{
        $expense = new Expense($this->request->getPost());

				if ($this->model->insert($expense)) {

					return redirect()->to("/admin/expense/")
									 ->with('info', 'Expense created successfully');

		        } else {

					return redirect()->back()
									 ->with('errors', $this->model->errors())
									 ->with('warning', 'Invalid data')
									 ->withInput();
				}
	}

	public function edit($id)
	{
		$expense  = $this->getExpenseOr404($id);

		$category = $this->category_model->findAll();

		return view('Admin/Expenses/edit', [
			'expense' => $expense,
			'category' => $category
        ]);
	}

    public function update($id)
	{
        //$expense  = $this->getExpenseOr404($id);

				$expense  = $this->getExpenseOr404($id);

				$expense->fill($this->request->getPost([
		      'expense_name', 'category_id', 'expense_id', 'payment_method', 'amount', 'expense_description',
		    ]));

				if ( ! $expense->hasChanged()) {

		            return redirect()->back()
		                             ->with('warning', 'Nothing to update')
		                             ->withInput();
				}

		        if ($this->model->save($expense)) {

			        return redirect()->to("/admin/expense")
			                         ->with('info', 'Expense updated successfully');

				} else {

		            return redirect()->back()
		                             ->with('errors', $this->model->errors())
		                             ->with('warning', 'Invalid data')
									 						 	 ->withInput();

				}
	}

public function fetchExpenseData($id){
	$expense = $this->model->where('id', $id)
									        ->findAll();
		//dd($expense);
		foreach ($expense as $data){
			 $data->{'id'} =	$data->id;
			 $data->{'expense_id'} =	$data->expense_id;
		 }
		 //dd($data);
		 echo json_encode($data);
}

	public function delete($id)
	{
        $expense  = $this->getExpenseOr404($id);
				//$expense = new Expense($this->getExpenseOr404($id));

        if ($this->request->getMethod() === 'post') {

            $this->model->delete($id);

			return redirect()->to('/admin/expense')
                             ->with('info', 'Expense deleted successfully');
		}

			return view('Admin/Expenses/delete', [
	            'expense' => $expense
	        ]);
	}

	public function getExpenseOr404($id)
	{
		//$expense  = new Expense
		$expense  = $this->model->find($id);
			 if ($expense === null) {

				throw new \CodeIgniter\Exceptions\PageNotFoundException("Expense with id $id not found");

			 }

			 return $expense;
	}
}
