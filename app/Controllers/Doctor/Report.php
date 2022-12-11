<?php

namespace App\Controllers\Doctor;

//protected $db;

//use App\Models\StaffModel;

//use App\Entities\Patient;

//use App\Entities\Guardian;


class Report extends \App\Controllers\BaseController
{
	private $model;

	//private $guardian_model;

	public function __construct()
	{
		/*$this->doctor_model = new \App\Models\DoctorModel;
		$this->guardian_model = new \App\Models\GuardianModel;
		$this->db = db_connect();*/

	}

	public function index()
	{
       /*$patients = $this->patient_model->join('guardians', 'guardians.patient_id = patients.id')
                                        //->findAll();

       $guardian = $this->guardian_model ->findAll();*/

		return view("Doctor/Home/index");
	}

	public function new()
    {
      $model = new \App\Models\PatientsModel;

      $data = $model->get()->getResultArray();

			//$details = $this->model->get_where('patients', array('patient_code' => $patient_code))->result_array();

			//$details = $this->request->getPost('patient_code');
			//$request->getPost()
			///$details =$model->findAll();

      return view("doctor/report/new",[
        'data' => $data
        //'details' =>$details
      ]);
    }

		function fetchPatientBiodata($id){
			//$model = new \App\Models\PatientsModel;
			$model = new \App\Models\GuardianModel;
			//$id = $this->request->getPost('id');

			$patient = $model->join('patients', 'patients.id = guardians.patient_id')
											 ->where('patient_id', $id)
			                 ->findAll();

				foreach ($patient as $patient_data){
					 $data['name'] =	$patient_data->patient_name;
				   $data['age'] =	$patient_data->age;
					 $data['gender'] =	$patient_data->gender;
					 $data['marital_status'] =	$patient_data->marital_status;
					 $data['occupation'] =	$patient_data->occupation;
					 $data['religion'] =	$patient_data->religion;
					 $data['languages'] =	$patient_data->language;
					 $data['informant'] =	$patient_data->guardian_name;
					 $data['relationship'] =	$patient_data->relationship;
				}

				echo json_encode($data);
		}

		public function create()
		{

			$patient = new \App\Models\ReportModel;
			$patient = $this->request->getPost('diagnose');

			dd($patient);


		}

  }
