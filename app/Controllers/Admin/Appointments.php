<?php

namespace App\Controllers\Admin;

//protected $db;

//use App\Models\StaffModel;

use App\Entities\Referal;

use App\Entities\User;
use App\Entities\Appointment;


class Appointments extends \App\Controllers\BaseController
{
  private $referal_model;
  private $patient_model;
  private $appointment_model;

  public function __construct()
  {
    $this->appointment_model = new \App\Models\AppointmentsModel;
    $this->patient_model = new \App\Models\PatientsModel;
    $this->user_model = new \App\Models\UserModel;
  }
  public function index()
  {
    $appointment  = $this->appointment_model->join('staff', 'staff.user_id = appointment_schedules.doctor_id')
                                            ->join('patients', 'patients.id = appointment_schedules.patient_id')
                                            ->findAll();
//dd($appointment);
    return view('Admin/Appointments/index', [
      'appointment' => $appointment
    ]);
  }

  public function new()
    {
        $appointment = new Appointment;
        $doctor = new User;
        $doctor  =  $this->user_model ->where('is_doctor', 1)
                                      ->findAll();
        return view('Admin/Appointments/new', [
          'appointment' => $appointment,
          'doctor' => $doctor
        ]);
    }

    public function create()
  	{
  		//if($this->request->getMethod() == 'post') {

  		$appointment  = new Appointment($this->request->getPost());

  		if ( $this->appointment_model->insert($appointment)) {

        return redirect()->to("/admin/appointment/success");
                            //->with('info', 'Patient created successfully');
  		 }else{

         return redirect()->back()
                          ->with('errors', $this->appointment_model->errors())
                          ->with('warning', 'Invalid data')
                          ->withInput();
          }
  		//}
  	}

    public function success()
		{
			return view('Admin/Appointments/success');
		}
    public function getPatientDetails($id)
    {
      $patient = $this->patient_model->where('assigned_doctor_id', $id)->findAll();

      echo json_encode($patient);
    }

     public function edit($id)
      {
        $appointment  = $this->getAppointmentOr404($id);
          //$referal_patient = $this->referal_model ->find($id);
  			$doctor = new User;
  			$doctor  =  $this->user_model ->where('is_doctor', 1)
  																	 ->findAll();
        return view("Admin/Appointments/edit", [
          'appointment' => $appointment,
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
 				$appointment = $this->appointment_model->where('appointment_id', $id)->findAll();
 					foreach ($appointment as $data){
 						 $data->{'appointment_id'} =	$data->appointment_id;
 						 $data->{'delete_name'} =	$data->appointment_code;
 						 //$data->{'department_description'} =	$data->department_description;
 					 }
 					 echo json_encode($data);
 			}

       public function delete()
   		{
        $id = $this->request->getPost('appointment_id');

        $appointment  = $this->getAppointmentOr404($id);

   			if ($this->request->getMethod() == 'post') {

   				  $this->appointment_model->delete($id);

   				  return redirect()->to("/admin/appointment")
   									->with('danger', 'Appointment schedule deleted successfully');
   			}
   		}

      private function getAppointmentOr404($id)
  				{
  					$appointment = $this->appointment_model->find($id);

  					if ($appointment === null) {

  						throw new \CodeIgniter\Exceptions\PageNotFoundException("Referal patient with id $id not found");

  					}

  					return $appointment;
  				}


}
