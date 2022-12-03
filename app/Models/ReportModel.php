<?php

namespace App\Models;

class ReportModel extends \CodeIgniter\Model
{
    protected $table = 'patient_history';

    protected $allowedFields  = [
      'diagnose'
    ];

    //protected $returnType ='App\Entities\Guardian';
    //protected $useTimestamps = true;

    //protected $createdField  = 'created_at';

    //protected $updatedField  = 'updated_at';

    //protected $deletedField  = 'deleted_at';

    protected $validationRules = [

    			/*'guardian_name' 			=>'required',
    			'guardian_contact'	        =>'required|mobileValidation[guardian_contact]|is_unique[guardians.guardian_contact.,guardian_contact,ignore_value]',
          'relationship'  => 'required',
          'patient_source' => 'required'*/
    			];

     protected $validationMessages = [

    			/*'guardian_name' => [
    				'required'=> 'Please enter guardian name'
    			],

    			'guardian_contact' => [
    				'required'=> 'Please enter contacts',
            'mobileValidation' => 'Invalid contact number format',
            'is_unique' => 'Contact already exists'
    			],

          'patient_source' => [
    				'required'=> 'Please select patient source'
    			],*/
    ];

    //protected $skipValidation     = false;
}
