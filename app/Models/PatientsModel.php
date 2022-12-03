<?php

namespace App\Models;

class PatientsModel extends \CodeIgniter\Model
{

    protected $table = 'patients';

    protected $allowedFields = [
      'patient_name', 'patient_code', 'age','county','gender','marital_status',
      'occupation', 'language', 'religion', 'assigned_doctor_id',
    ];

    protected $returnType    = 'App\Entities\Patient';

    protected $useTimestamps = true;

    protected $validationRules = [
    			'patient_name' 			=>'required',
    			'patient_code'	    =>'required|is_unique[patients.patient_code.,patient_code,ignore_value]',
          'age'               =>'required|integer',
          'county'            =>'required|alpha',
          'gender'            =>'required|in_list[Male,Female]',
          'marital_status'    =>'required|in_list[Single,Married,Divorced]',
          'occupation'        =>'required|alpha_space',
          'language'          =>'required',
          'religion'          =>'required|in_list[Christian,Muslim]',
          'assigned_doctor_id'     => 'required'
    			];

     protected $validationMessages = [

    			'patient_name' => [
        				'required'=> 'Please enter patient name'
    			],

    			'patient_code'=> [
      				'required'    => 'Please enter patient registration number',
              'is_unique'   => 'Patient code already exists'
    			],
          'gender' => [
      				'required'=> 'Please select gender',
              'in_list'=> 'Please select specified gender'
    			],
          'county' => [
              'required' => 'please enter county',
              'alpha'    => 'Supplied value ({value}) for {field} is invalid. Please check and try again'
          ],
          'age' => [
              'required' => 'please enter age',
              'integer'    => 'Invalid age format'
          ]
    ];

    protected $skipValidation     = false;

    public function generateRandomString($length = 10) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 3)];
    }
    return $randomString;
    }
}
