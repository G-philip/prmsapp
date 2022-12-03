<?php

namespace App\Controllers\Admin;

use App\Entities\Patient;

use App\Entities\Guardian;

use App\Entities\Commissions;

use App\Entities\User;


class Patients extends \App\Controllers\BaseController
{
	private $patient_model;
	private $guardian_model;
	private $commission_model;
	private $user_model;

	public function __construct()
	{
		$this->patient_model = new \App\Models\PatientsModel;
		$this->guardian_model = new \App\Models\GuardianModel;
		$this->commission_model = new \App\Models\CommissionModel;
		$this->user_model = new \App\Models\UserModel;
		$this->db = db_connect();

	}

	public function index()
	{
		 $patients = $this->patient_model ->join('guardians', 'guardians.patient_id = patients.id')
		 																	->join('commission', 'commission.patient_id = patients.id')
																			->orderBy('created_at', 'DESC')
                                      ->findAll();
					//dd($patients);

		return view("Admin/Patients/index", [
			'patients'  => $patients
		]);
	}

	public function new()
    {
        $patient = new Patient;

        $guardian = new Guardian;

				$commission = new Commissions;

				$file = $this->patient_model->generateRandomString($length = 10);

				$doctor = new User;
				$doctor  =  $this->user_model ->where('is_doctor', 1)
																			->findAll();

        return view('Admin/Patients/new',[
                'patient' => $patient,
                'guardian' => $guardian,
							  'commission' => $commission,
								'doctor' => $doctor,
								'file' => $file
            ]);
    }

	public function create()
	{
		//if($this->request->getMethod() == 'post') {

		$patient    = new Patient($this->request->getPost());

    $guardian   = new Guardian($this->request->getPost());

		$commission = new Commissions($this->request->getPost());

        $this->db->transStart(); //Begin Transaction

				if ( ! $this->patient_model->insert($patient)) {

		        return redirect()->back()
		                         ->with('errors', $this->patient_model->errors())
		                         ->with('warning', 'Invalid data')
		                         ->withInput();
		    }
				$patient_id = $this->patient_model->insertID;

		    $guardian->patient_id = $patient_id;

		    if ( ! $this->guardian_model->insert($guardian)) {

					return redirect()->back()
													 ->with('errors', $this->guardian_model->errors())
													 ->with('warning', 'Invalid data')
													 ->withInput();

		    }

		       $commission->patient_id = $patient_id;
				if ( ! $this->commission_model->save($commission)) {

		        return redirect()->back()
		                         ->with('errors', $this->commission_model->errors())
		                         ->with('warning', 'commission Invalid data')
		                         ->withInput();
		    }

        $this->db->transComplete(); //End Transaction

        if($this->db->transStatus() === TRUE) {
					return redirect()->to("/admin/patients")
															->with('info', 'Patient created successfully');
        }
		//}
	}

   public function edit($id, $guardian_id, $commission_id)
    {

        $patient = $this->patient_model ->join('guardians', 'guardians.patient_id = patients.id')
																				->join('commission', 'commission.patient_id = patients.id')
																				->find($id, $guardian_id, $commission_id);
				$doctor = new User;
				$doctor  =  $this->user_model ->where('is_doctor', 1)
																	 ->findAll();
        return view("Admin/Patients/edit", [
                            'patient' => $patient,
														'doctor'  => $doctor
                            ]);
    }

   public function update($id, $guardian_id, $commission_id)
		{
			$patient  = $this->getPatientOr404($id);

			$patient->fill($this->request->getPost([
				'patient_name', 'patient_code', 'age','county','gender','marital_status',
				'occupation', 'language', 'religion', 'assigned_doctor_id',
			]));

			$guardian = $this->getGuardianOr404($guardian_id);

			$guardian->fill($this->request->getPost([
				'guardian_name', 'contact_number', 'patient_source', 'relationship',
			]));

			$commission = $this->getCommissionOr404($commission_id);

			$commission->fill($this->request->getPost([
				'commission_status', 'commission_amount', 'paid_to',
			]));

			$this->db->transStart(); //Begin Transaction

			if (! $patient->hasChanged()) {

							return redirect()->back()
															 ->with('warning', 'Nothing to update on patient')
															 ->withInput();
					}


					if ( ! $this->patient_model->where('id', $id)->save($patient))
					{

							return redirect()->back()
															 ->with('errors', $this->patient_model->errors())
															 ->with('warning', 'Invalid patient data')
															 ->withInput();
					}

					if (! $guardian->hasChanged()) {

							return redirect()->back()
															 ->with('warning', 'Nothing to update on Guardian')
															 ->withInput();
					}

					if ( ! $this->guardian_model->where('guardian_id', $guardian_id)->save($guardian)) {

						return redirect()->back()
														 ->with('errors', $this->guardian_model->errors())
														 ->with('warning', 'Invalid guardian data')
														 ->withInput();
					}
					if (! $commission->hasChanged()) {

							return redirect()->back()
															 ->with('warning', 'Nothing to update on commission')
															 ->withInput();
					}

					if ( ! $this->commission_model->where('commission_id', $commission_id)->save($commission)) {

						return redirect()->back()
														 ->with('errors', $this->commission_model->errors())
														 ->with('warning', 'Invalid data')
														 ->withInput();
					}

				 $this->db->transComplete(); //End Transaction

         if($this->db->transStatus() === TRUE) {
 					return redirect()->to("/admin/patients")
 															->with('info', 'Patient created successfully');
         }
    }

		public function show($id, $guardian_id, $commission_id)
    {
        //$patient = $this->getPatientOr404($id);

		$patient = $this->patient_model ->join('guardians', 'guardians.patient_id = patients.id')
																		->join('commission', 'commission.patient_id = patients.id')
																		->find($id, $guardian_id, $commission_id);

		return view('Admin/Patients/show', [
            'patient' => $patient
        ]);
	}

		public function delete($id, $guardian_id, $commission_id)
		{
			//dd($patient_id);
			$patient = $this->patient_model ->join('guardians', 'guardians.patient_id = patients.id')
																			->join('commission', 'commission.patient_id = patients.id')
																			->find($id, $guardian_id, $commission_id);
		//dd($patient);
			if ($this->request->getMethod() == 'post') {

				$this->patient_model    ->delete($id);
				$this->guardian_model   ->delete($guardian_id);
				$this->commission_model ->delete($commission_id);

				 return redirect()->to("/admin/patients")
									->with('info', 'Patient deleted successfully');
			}

			return view("Admin/Patients/delete", [
													'patient' => $patient
													]);
		}

		private function getPatientOr404($id)
				{
					$patient = $this->patient_model->find($id);

					if ($patient === null) {

						throw new \CodeIgniter\Exceptions\PageNotFoundException("Patient with id $id not found");

					}

					return $patient;
				}

				private function getGuardianOr404($guardian_id)
						{
							$guardian = $this->guardian_model->find($guardian_id);

							if ($guardian === null) {

								throw new \CodeIgniter\Exceptions\PageNotFoundException("Guardian with id $guardian_id not found");

							}

							return $guardian;
						}

						private function getCommissionOr404($commission_id)
								{
									$commission = $this->commission_model->find($commission_id);

									if ($commission === null) {

										throw new \CodeIgniter\Exceptions\PageNotFoundException("Guardian with id $commission_id not found");

									}

									return $commission;
								}
}
