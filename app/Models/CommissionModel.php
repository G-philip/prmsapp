<?php

namespace App\Models;

class CommissionModel extends \CodeIgniter\Model
{

    protected $table = 'commission';

    protected $primaryKey = 'commission_id';

    protected $allowedFields = [
          'commission_status', 'commission_amount', 'paid_to', 'patient_id'
      ];

    protected $returnType    = \App\Entities\Commissions::class;

     //protected $returnType    = 'App\Entities\Commissions';

    protected $validationRules = [
    			'commission_status' 	=>'permit_empty',
          'commission_amount' => 'required_with[commission_status]',
          'paid_to' => 'required_with[commission_status]',

    ];

    //protected $skipValidation     = false;
}
