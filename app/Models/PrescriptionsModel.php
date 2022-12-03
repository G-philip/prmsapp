<?php

namespace App\Models;

class PrescriptionsModel extends \CodeIgniter\Model
{

    protected $table = 'prescriptions';

    protected $allowedFields = [
      'patient_name', 'patient_code', 'prescription', 'doctor', 'prescription_entries',
    ];

    protected $returnType    = 'App\Entities\Prescription';

    protected $useTimestamps = true;

    protected $validationRules = [
    			'patient_name' 			=>'required',
    			'patient_code'	    =>'required|is_unique[prescriptions.patient_code.,patient_code,ignore_value]',
          'prescription'               =>'required',
          'doctor'    =>'required',
    			];

     protected $validationMessages = [

    			'patient_name' => [
        				'required'=> 'Please enter patient name'
    			],

    			'patient_code'=> [
      				'required'    => 'Please enter patient registration number',
              'is_unique'   => 'Patient code already exists'
    			],
          'prescription' => [
      				'required'=> 'Please add prescription'
    			],

          'doctor' => [
              'required' => 'Prescribing doctor should be available'
          ],
    ];

    protected $skipValidation     = false;
}
