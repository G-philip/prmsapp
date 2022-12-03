<?php

namespace App\Controllers\Admin;

//protected $db;

//use App\Models\StaffModel;

use App\Entities\Referal;

use App\Entities\User;


class Referals extends \App\Controllers\BaseController
{
  private $referal_model;
  private $user_model;

  public function __construct()
  {
    $this->referal_model = new \App\Models\ReferalModel;
    $this->user_model = new \App\Models\UserModel;
  }
  public function index()
  {
    $referal_patient  = $this->referal_model->findAll();

    return view('Admin/Referals/index', [
      'referal_patient' => $referal_patient
    ]);
  }

  public function new()
    {
        $referal_patient = new Referal;
        $doctor = new User;
        $doctor  =  $this->user_model ->where('is_doctor', 1)
                                      ->findAll();
        return view('Admin/Referals/new', [
          'referal_patient' => $referal_patient,
          'doctor' => $doctor
        ]);
    }

    public function create()
  	{
  		//if($this->request->getMethod() == 'post') {

  		$referal_patient  = new Referal($this->request->getPost());

  		if ( $this->referal_model->insert($referal_patient)) {

        return redirect()->to("/admin/referal/success");
                            //->with('info', 'Patient created successfully');
  		 }else{

         return redirect()->back()
                          ->with('errors', $this->referal_model->errors())
                          ->with('warning', 'Invalid data')
                          ->withInput();
          }
  		//}
  	}

    public function success()
		{
			return view('Admin/Referals/success');
		}

     public function edit($id)
      {
        $referal_patient  = $this->getPatientOr404($id);
          //$referal_patient = $this->referal_model ->find($id);
  			$doctor = new User;
  			$doctor  =  $this->user_model ->where('is_doctor', 1)
  																	 ->findAll();
        return view("Admin/Referals/edit", [
          'referal_patient' => $referal_patient,
          'doctor'  => $doctor
        ]);
      }

      public function update($id)
   		{
   			$referal_patient  = $this->getPatientOr404($id);
        //$referal_patient = $this->referal_model ->find($id);

   			$referal_patient->fill($this->request->getPost([
          'patient_name', 'patient_code', 'age','gender','diagnosis','refering_consultant','BP',
          'RR', 'TEMP', 'RBS', 'patient_history', 'physical_exermination_findings', 'investigations_done',
          'treatment_given', 'referal_reason', 'assigned_doctor_id',
   			]));

   			if (! $referal_patient->hasChanged()) {

   							return redirect()->back()
   															 ->with('warning', 'Nothing to update on referal patient')
   															 ->withInput();
   					}


   					if ( $this->referal_model->save($referal_patient))
   					{

              return redirect()->to("/admin/referal")
    															->with('info', 'Referal Patient updated successfully');
   					}else{

              return redirect()->back()
                               ->with('errors', $this->referal_model->errors())
                               ->with('warning', 'Invalid data')
                               ->withInput();
            }
       }

       public function deleteData($id)
 			{
 				$referal_patient = $this->referal_model->where('id', $id)->findAll();
 					foreach ($referal_patient as $data){
 						 $data->{'referal_id'} =	$data->id;
 						 $data->{'patient_name'} =	$data->patient_code;
 						 //$data->{'department_description'} =	$data->department_description;
 					 }
 					 echo json_encode($data);
 			}

       public function delete()
   		{
        $id = $this->request->getPost('referal_id');
        $referal_patient  = $this->getPatientOr404($id);
   			//$referal_patient = $this->referal_model->find($id);
   		//dd($patient);
   			if ($this->request->getMethod() == 'post') {

   				  $this->referal_model    ->delete($id);

   				  return redirect()->to("/admin/referal")
   									->with('danger', 'Referal Patient deleted successfully');
   			}

   			return view("Admin/Referals/delete", [
   													'referal_patient' => $referal_patient
   													]);
   		}

      private function getPatientOr404($id)
  				{
  					$referal_patient = $this->referal_model->find($id);

  					if ($referal_patient === null) {

  						throw new \CodeIgniter\Exceptions\PageNotFoundException("Referal patient with id $id not found");

  					}

  					return $referal_patient;
  				}
}
