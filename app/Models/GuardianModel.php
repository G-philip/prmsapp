<?php

namespace App\Models;

class GuardianModel extends \CodeIgniter\Model
{
    protected $table = 'guardians';

    protected $primaryKey = 'guardian_id';

    protected $allowedFields  = [
      'guardian_name', 'contact_number', 'patient_id','patient_source', 'relationship'
    ];

    protected $returnType ='App\Entities\Guardian';

    //protected $useTimestamps = true;

    protected $validationRules = [

    			'guardian_name' 			=>'required',
    			'contact_number'	        =>'required|mobileValidation[contact_number]|is_unique[guardians.contact_number.,contact_number,ignore_value]',
          'relationship'  => 'required|in_list[Parent,Guardian,Sibling,Wife,Husband]',
          'patient_source' => 'required|in_list[Internet,Referal]'
    			];

     protected $validationMessages = [

    			'guardian_name' => [
    				'required'=> 'Please enter guardian name'
    			],

    			'contact_number' => [
      				'required'          => 'Please enter contact number',
              'mobileValidation'  => 'Invalid contact number format',
              'is_unique'         => 'Contact already exists'
    			],

          'patient_source' => [
      				'required'=> 'Please select patient source'
    			],

          'relationship' => [
      				'required'          => 'Please select guardian relationship with patient',
              'in_list'           => 'Please select provided select options'
    			],
    ];

    //protected $skipValidation     = false;
}
