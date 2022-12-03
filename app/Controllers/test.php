<?php

namespace App\Controllers;

//use App\Models\DepartmentModel;

use App\Models\StaffModel;

class Admin extends BaseController
{

    public function home()
    {
        return view('Admin/Home/index');
    }

    public function department()
	{
        $model = new \App\Models\DepartmentModel;

        $data = $model->findAll();

		return view("Admin/Departments/index", ['departments' => $data ]);
	}

	 public function show($id)
    {
         $model = new \App\Models\DepartmentModel;

         $department  = $model->find($id);

         return view("Admin/Departments/show", ['department' => $department ]);

    }

    public function new()
    {
         //$model = new \App\Models\DepartmentModel;

         //$department  = $model->find($id);

         //dd($department);

         return view("Admin/Departments/new");


    }

    public function create()
    {
         $model  = new \App\Models\DepartmentModel;

         $result = $model->insert([
            'department_name' =>$this->request->getPost("department_name"),
            'department_description' =>$this->request->getPost("department_description")
         ]);

         if ($result == false) {

            return redirect()->back()
                             ->with('errors', $model->errors())
                             ->with('warning', 'Invalid data');
                           //->withInput();

         }else{

            return redirect()->to("/admin/department/show/$result")
                             ->with('info', 'Department created successfully');
         }


    }

  public function edit($id)
    {
         $model = new \App\Models\DepartmentModel;

         $department  = $model->find($id);

         return view("Admin/Departments/edit", [
                            'department' => $department
                            ]);

    }

    public function update($id)
    {
        $model  = new \App\Models\DepartmentModel;

         $result = $model->update($id,[
            'department_name' =>$this->request->getPost("department_name"),
            'department_description' =>$this->request->getPost("department_description")
         ]);

        if ($result ) {

            return redirect()->to("/admin/department/show/$id")
                             ->with('info', 'Department Updated successfully');

         }else{

            return redirect()->back()
                             ->with('errors', $model->errors())
                             ->with('warning', 'Invalid data')
                             ->withInput();

         }
    }

    public function staff()
    {
        $model = new \App\Models\StaffModel;


        $data = $model//->join('department', 'department.department_name = staff.department_id')
        ->findAll();

        return view("Admin/Staff/index", ['staff' => $data ]);
    }

     public function newStaff()
    {

        $model = new \App\Models\DepartmentModel;

        $result = $model->get()
                        ->getResultArray();

        return view("Admin/Staff/new",['department' => $result ]);
    }

     public function showStaff($id)
    {
        $model = new \App\Models\StaffModel;

         $staff  = $model->join('department', 'department.id = staff.department_id')
                        ->find($id);

         return view("Admin/Staff/show", ['staff' => $staff ]);

    }

    public function createStaff()
    {
         $model  = new \App\Models\StaffModel;

         $result = $model->insert([
            'staff_name' =>$this->request->getPost("staff_name"),
            'department_id' =>$this->request->getPost("department_id"),
            'gender' =>$this->request->getPost("gender"),
            'agreed_salary' =>$this->request->getPost("agreed_salary"),
            'annual_increment' =>$this->request->getPost("annual_increment"),
            'salary_period_from' =>$this->request->getPost("salary_period_from"),
            'salary_period_to' =>$this->request->getPost("salary_period_to"),
            'date_of_termination' =>$this->request->getPost("date_of_termination")
         ]);

         if ($result == false) {

            return redirect()->back()
                             ->with('errors', $model->errors())
                             ->with('warning', 'Invalid data');
                           //->withInput();

         }else{

            return redirect()->to("/admin/staff")
                             ->with('info', 'Staff created successfully');
         }
    }

public function editStaff($id)
    {
        $model = new StaffModel;

        $staff  = $model->find($id);
        $model = new \App\Models\DepartmentModel;
        $departments = $model ->findAll();

         return view("Admin/Staff/edit", [
                        'staff' => $staff,
                        'departments' => $departments
                ]);
    }

     public function updateStaff($id)
    {
        $model  = new \App\Models\StaffModel;

         $result = $model->update($id,[
            'staff_name' =>$this->request->getPost("staff_name"),
            'department_id' =>$this->request->getPost("department_id"),
            'gender' =>$this->request->getPost("gender"),
            'agreed_salary' =>$this->request->getPost("agreed_salary"),
            'annual_increment' =>$this->request->getPost("annual_increment"),
            'salary_period_from' =>$this->request->getPost("salary_period_from"),
            'salary_period_to' =>$this->request->getPost("salary_period_to"),
            'date_of_termination' =>$this->request->getPost("date_of_termination")
         ]);

        if ($result ) {

            return redirect()->to("/admin/staff/show/$id")
                             ->with('info', 'Staff Updated successfully');

         }else{

            return redirect()->back()
                             ->with('errors', $model->errors())
                             ->with('warning', 'Invalid data')
                             ->withInput();

         }
    }

    public function expenseCategory()
    {
        $model = new \App\Models\CategoryModel;

        $categories = $model->findAll();

        return view("Admin/Categories/index", ['categories' => $categories ]);
    }

    public function createCategory()
    {
        $model  = new \App\Models\CategoryModel;

         $result = $model->insert([
            'category' =>$this->request->getPost("category"),
         ]);

         if ($result == false) {

            return redirect()->back()
                             ->with('errors', $model->errors())
                             ->with('warning', 'Invalid data');
                           //->withInput();

         }else{

            return redirect()->to("/admin/expenses")
                             ->with('info', 'Expense Category created successfully');
         }
    }

    public function expense()
    {
        $model = new \App\Models\ExpenseModel;

        $expenses = $model->select('*, Month(created_at) AS month')
                          ->select('monthname(created_at) As monthname')
                          ->select('Year(created_at) As year')
                          //->sortBy('month')
                          ->orderBy("Month(created_at) DESC")
                          ->get()
                          ->getResultArray();


        $totals =$model->selectSum('amount')
               ->select('Month(created_at)')
               ->select('monthname(created_at) As monthname')
               ->groupBy("Month(created_at)")
               ->get()
               ->getResultArray();

               $month_totals = [];

                foreach ($totals as $value) {
                    $month = $value["Month(created_at)"];
                    $month_totals[$month] = $value["amount"];
                }
        $total_expenses= $model->selectSum('amount')
                               ->findAll();

        return view("Admin/Expenses/index", ['expenses' => $expenses,
                                             'totals'    => $totals,
                                             'month_totals' => $month_totals,
                                             'total_expenses' =>$total_expenses
                                                       ]);
    }


    public function newPatient()
    {
        return view('Admin/Patients/new');
    }

    //public function createPatient()
    //{
         // $patient_model  = new \App\Models\PatientsModel;
         // $guardian_model  = new \App\Models\GuardianModel;

         //$patient_data = [
                //'patient_name' => $this->request->getPost('patient_name'),
                //'patient_number' => $this->request->getPost('patient_number')
            //];

         //$guardian_data = ['guardian_name' => $this->request->getPost('guardian_name'),
                       //'guardian_contact' => $this->request->getPost('guardian_contact')
                              // ];

        // if ( ! $patient_model->insert($patient_data)) {

                //$errors = $patient_model->errors();

                //dd($errors);
           // return redirect()->back()
                             //->with('errors', $patient_model->errors())
                             //->with('warning', 'Invalid data');
                           //->withInput();
            //}


        //if ( ! $guardian_model->insert($guardian_data)) {

            //$errors = $guardian_model->errors();

                //dd($errors);

            //return redirect()->back()
                             //->with('errors', $guardian_model->errors())
                             //->with('warning', 'Invalid data');
                           //->withInput();
        //echo "inserted; ", $patient_model->insertID, " ", $guardian_data->insertID;

        //} else {

            //$errors = $patient_model->errors() + $guardian_model->errors();  // error messages from both models

            //dd($errors);
        //}



         //if ($details) {
           // return redirect()->to("/admin/Patients")
                             //->with('info', 'Patient created successfully');

         //}else{
             //return redirect()->back()
                             //->with('errors', $model->errors())
                             //->with('warning', 'Invalid data');
                           //->withInput();
         //}
    //}

public function createPatient()
{
    $patient_model  = new \App\Models\PatientsModel;
    $guardian_model  = new \App\Models\GuardianModel;

    $patient_data = [
        'patient_name' => $this->request->getPost('patient_name'),
        'patient_number' => $this->request->getPost('patient_number')
            ];

    $guardian_data = [
        'guardian_name' => $this->request->getPost('guardian_name'),
        'guardian_contact' => $this->request->getPost('guardian_contact'),
            ];

    if ( ! $patient_model->insert($patient_data)) {

        return redirect()->back()
                         ->with('errors', $patient_model->errors())
                         ->with('warning', 'Invalid data');
                           //->withInput();
    }

    $patient_id = $patient_model->insertID;

    $guardian_data['patient_id'] = $patient_id;

    if ( $guardian_model->insert($guardian_data)) {

        echo "inserted; ", $patient_model->insertID, " ", $guardian_model->insertID;


    } else {

        return redirect()->back()
                         ->with('errors', $patient_model->errors() + $guardian_model->errors())
                         ->with('warning', 'Invalid data');
                           //->withInput();
    }
}

}
