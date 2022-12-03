<?php

namespace App\Models;

class ReferalModel extends \CodeIgniter\Model
{

    protected $table = 'referal_patients';

    protected $allowedFields = [
      'patient_name', 'patient_code', 'age','gender','diagnosis','refering_consultant','BP',
      'RR', 'TEMP', 'RBS', 'patient_history', 'physical_exermination_findings', 'investigations_done',
      'treatment_given', 'referal_reason', 'assigned_doctor_id',
    ];

    protected $returnType    = 'App\Entities\Referal';

    protected $useTimestamps = true;

    protected $validationRules = [
    			'patient_name' 			=>'required',
    			'patient_code'	    =>'required|is_unique[referal_patients.patient_code.,patient_code,ignore_value]',
          'age'               =>'required|integer',
          'gender'            =>'required',
          'diagnosis'         =>'required',
          'refering_consultant'    =>'required',
          'BP'        =>'required',
          'RR'          =>'required',
          'TEMP'          =>'required',
          'RBS'          =>'required',
          'patient_history'          =>'required',
          'physical_exermination_findings'          =>'required',
          'investigations_done'          =>'required',
          'treatment_given'          =>'required',
          'referal_reason'          =>'required',
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

          'age' => [
              'required' => 'please enter age',
              'integer'    => 'Invalid age format'
          ],

          'diagnosis' => [
              'required' => 'please enter diagnosis',
              'alpha'    => 'Supplied value ({value}) for {field} is invalid. Please check and try again'
          ],
    ];

    protected $skipValidation     = false;
}
