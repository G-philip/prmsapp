<?php

namespace App\Controllers\Admin;

//protected $db;

//use App\Models\StaffModel;

use App\Entities\Prescription;

use App\Entities\User;


class Invoices extends \App\Controllers\BaseController
{
  private $prescription_model;
  private $patient_model;
  private $referal_model;

  public function __construct()
  {
    $this->prescription_model = new \App\Models\PrescriptionsModel;
    $this->patient_model = new \App\Models\PatientsModel;
    $this->referal_model = new \App\Models\ReferalModel;
  }
  public function index()
  {
    $patient_prescription  = $this->prescription_model->findAll();

    return view('Admin/Invoice/index', [
      'patient_prescription' => $patient_prescription
    ]);
  }

  public function new()
    {
      $patient_data = $this->patient_model->findAll();

      $referal_data = $this->referal_model->findAll();

        return view('Admin/Invoice/new', [
           'patient_data' => $patient_data,
           'referal_data' => $referal_data
        ]);
    }

    public function create()
  	{
  		//if($this->request->getMethod() == 'post') {

  		$patient_prescription  = new Prescription($this->request->getPost());
      // dd($patient_prescription);
      $prescription_entries = array();
        $diagnose = $this->request->getPost('entry_diagnose');
        $medicine_name = $this->request->getPost('entry_medicine_name');
        $medicine_type = $this->request->getPost('entry_medicine_type');
        $usage_prescription = $this->request->getPost('entry_prescription');
        $usage_days = $this->request->getPost('entry_days');
        $number_of_entries          = sizeof($diagnose);
//dd($prescription_entries);
        for ($i = 0; $i < $number_of_entries; $i++){

            if($diagnose[$i] != "" && $medicine_name[$i] != "" && $medicine_type[$i] != "" && $usage_prescription[$i] != "" && $usage_days[$i] != "")
            {
                $new_entry = array('diagnose' => $diagnose[$i], 'medicine_name' => $medicine_name[$i], 'medicine_type' => $medicine_type[$i], 'usage_prescription' => $usage_prescription[$i], 'usage_days' => $usage_days[$i]);
                array_push($prescription_entries, $new_entry);
            }

        }

        $patient_prescription->prescription_entries = json_encode($prescription_entries);

  		if ( $this->prescription_model->insert($patient_prescription)) {

        return redirect()->to("/admin/prescription/success");
                            //->with('info', 'Patient created successfully');
  		 }else{

         return redirect()->back()
                          ->with('errors', $this->prescription_model->errors())
                          ->with('warning', 'Invalid data')
                          ->withInput();
          }
  		//}
  	}

    public function success()
		{
			return view('Admin/Prescriptions/success');
		}

    public function test()
		{
			return view('Admin/Invoice/test');
		}

    public function show()
    {
      //$patient_prescription = $this->prescription_model->find($id);

      return view('Admin/Invoice/show', [
        //'patient_prescription'  =>  $patient_prescription,
      ]);
    }

    public function edit($id)
     {
       $patient_prescription  = $this->getPrescriptionOr404($id);
       $model = new \App\Models\PatientsModel;
       $model1 = new \App\Models\ReferalModel;
       $data = $model->findAll();
       $data1 = $model1->findAll();
       return view("Admin/Prescriptions/edit", [
         'patient_prescription' =>$patient_prescription,
          'data' => $data,
          'data1'  => $data1
       ]);
     }

     public function update($id)
     {
       //$referal_patient  = $this->getPatientOr404($id);
       $patient_prescription  = $this->getPrescriptionOr404($id);

       $patient_prescription->fill($this->request->getPost([
         'patient_name', 'patient_code', 'prescription', 'doctor'
       ]));

       $prescription_entries = array();
         $diagnose = $this->request->getPost('entry_diagnose');
         $medicine_name = $this->request->getPost('entry_medicine_name');
         $medicine_type = $this->request->getPost('entry_medicine_type');
         $usage_prescription = $this->request->getPost('entry_prescription');
         $usage_days = $this->request->getPost('entry_days');
         $number_of_entries          = sizeof($diagnose);

         for ($i = 0; $i < $number_of_entries; $i++){

             if($diagnose[$i] != "" && $medicine_name[$i] != "" && $medicine_type[$i] != "" && $usage_prescription[$i] != "" && $usage_days[$i] != "")
             {
                 $new_entry = array('diagnose' => $diagnose[$i], 'medicine_name' => $medicine_name[$i], 'medicine_type' => $medicine_type[$i], 'usage_prescription' => $usage_prescription[$i], 'usage_days' => $usage_days[$i]);
                 array_push($prescription_entries, $new_entry);
             }

         }

         $patient_prescription->prescription_entries = json_encode($prescription_entries);

       if (! $patient_prescription->hasChanged()) {

               return redirect()->back()
                                ->with('info', 'Nothing to update on prescription')
                                ->withInput();
           }


           if ( $this->prescription_model->save($patient_prescription))
           {

             return redirect()->to("/admin/prescriptions")
                                 ->with('info', 'Prescription updated successfully');
           }else{

             return redirect()->back()
                              ->with('errors', $this->prescription_model->errors())
                              ->with('warning', 'Invalid data')
                              ->withInput();
           }
      }

    public function patientData($id)
    {
      $model = new \App\Models\PatientsModel;
      //$model = new \App\Models\ReferalModel;
      $prescription = $model->where('id', $id)->findAll();
      $model1 = new \App\Models\ReferalModel;
      $prescription1 = $model1->where('id', $id)->findAll();
        foreach ($prescription as $data){
           $data->{'patient_name'} =	$data->patient_name;
           $data->{'patient_code'} =	$data->patient_code;
         }
         foreach ($prescription1 as $data){
            $data->{'patient_name'} =	$data->patient_name;
            $data->{'patient_code'} =	$data->patient_code;
          }
         echo json_encode($data);
    }

       public function deleteData($id)
 			{
 				$patient_prescription = $this->prescription_model->where('id', $id)->findAll();
 					foreach ($patient_prescription as $data){
 						 $data->{'prescription_id'} =	$data->id;
 						 //$data->{'department_name'} =	$data->department_name;
 						 //$data->{'department_description'} =	$data->department_description;
 					 }
 					 echo json_encode($data);
 			}

       public function delete()
   		{
        $id = $this->request->getPost('prescription_id');
        $patient_prescription = $this->getPrescriptionOr404($id);
   			if ($this->request->getMethod() == 'post') {

   				  $this->prescription_model    ->delete($id);

   				  return redirect()->to("/admin/prescriptions")
   									->with('danger', 'Patient prescription deleted successfully');
                  }
   		}

      private function getPrescriptionOr404($id)
  				{
  					$patient_prescription = $this->prescription_model->find($id);

  					if ($patient_prescription === null) {

  						throw new \CodeIgniter\Exceptions\PageNotFoundException("Patient prescription with id $id not found");

  					}

  					return $patient_prescription;
  				}
}
