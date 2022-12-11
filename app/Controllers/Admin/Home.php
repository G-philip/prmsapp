<?php

namespace App\Controllers\Admin;

use App\Entities\Patient;
use App\Entities\Referal;


class Home extends \App\Controllers\BaseController
{
  private $expense_model;

	private $patient_model;

  private $referal_model;

  private $guardian_model;

	public function __construct()
	{
        $this->expense_model = new \App\Models\ExpenseModel;

				$this->patient_model = new \App\Models\PatientsModel;

        $this->referal_model = new \App\Models\ReferalModel;

        $this->staff_model = new \App\Models\StaffModel;

        $this->guardian_model = new \App\Models\GuardianModel;

        $this->db = db_connect();
	}
  public function index()
  {
      $total_patients= $this->patient_model->select('*')->countAll();
      $total_referals= $this->referal_model->select('*')->countAll();
      $total = $total_patients + $total_referals;
       //dd($total);

      $total_staffs = $this->staff_model->countAll();

      $total_expenses= $this->expense_model->selectSum('amount')
                                           ->findAll();


      /*recently_added_patient*/
      $recently_added_patient = $this->patient_model->where("created_at >= CURDATE()")
                                                     ->orderBy('id' , 'desc')
                                                     ->limit(3)
                                                    ->findAll();
       /*expense month analytics*/
      $totals =$this->expense_model->selectSum('amount')
                           ->select('created_at')
                           ->select('Monthname(created_at) As monthname')
                           ->groupBy("Year(created_at),Month(created_at)")
                           ->findAll();

      /*patient source analytics*/
      $patient_source_analitics =$this->guardian_model->select('patient_source, COUNT(patient_source) as total')
                                            ->groupBy('patient_source')
                                            ->orderBy('total', 'desc')
                                            ->findAll();
      //dd($patient_source);

       return view("Admin/Home/index", [
         'total' =>$total,
         'total_patients' =>  $total_patients,
         'total_staffs' =>  $total_staffs,
         'total_expenses' =>  $total_expenses,
         'totals' =>  $totals,
         'patient_source_analitics' => $patient_source_analitics,
         'recently_added_patient' => $recently_added_patient,

       ]);
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
