<?php

namespace App\Models;

class DepartmentModel extends \CodeIgniter\Model
{
    protected $table		  = 'department';

    protected $allowedFields  = ['department_name','department_description', 'user_id',];

    protected $returnType    = 'App\Entities\Department';

    protected $useTimestamps = true;

    protected $validationRules = [

    			'department_name' 			=>'required',
    			'department_description'	=>'required'
    			];

    protected $validationMessages = [

    			'department_name' => [
    				'required'=> 'Please enter department name'
    			],

    			'department_description' => [
    				'required'=> 'Please enter department description'
    			]
    ];

    public function paginateDepartmentsByUserId($id)
    {
        return $this->where('user_id', $id)
                    ->orderBy('created_at', 'DESC')
                    ->paginate(5);
    }

    public function getDepartmentByUserId($id, $user_id)
    {
        return $this->where('id', $id)
                    ->where('user_id', $user_id)
                    ->first();
    }

}
