<?php

namespace App\Models;

use CodeIgniter\Model;

use App\Models\DepartmentModel;

class StaffModel extends Model
{
    protected $table		  = 'staff';

    protected $primaryKey = 'staff_id';

    protected $allowedFields  = [
      'name', 'gender', 'department_id', 'annual_increment', 'agreed_salary',
       'salary_period_from', 'salary_period_to', 'contact_number', 'user_id',
    ];

    protected $returnType ='App\Entities\Staff';

    protected $useTimestamps = true;

    protected $validationRules = [
          	'name' 		      	=>'required|alpha_space',
          	'department_id'	        =>'required|integer',
            'gender'                =>'required|in_list[Male,Female]|alpha',
            'agreed_salary'         =>'required|decimal',
            'annual_increment'      =>'required|decimal',
            'salary_period_from'    =>'required|valid_date',
            'salary_period_to'      =>'required|valid_date',
            'contact_number'	        =>'required|mobileValidation[contact_number]|is_unique[staff.contact_number.,contact_number,ignore_value]',
            //'date_of_termination'   => 'required|valid_date',
    			];

    protected $validationMessages = [

          'staff_name' => [
          		'required'=> 'Please enter staff name'
          ],

          'department_id' => [
          		'required'=> 'Please select department'
          ],

          'gender' => [
              'required'=> 'Please select gender'
          ],

          'agreed_salary' => [
              'required'=> 'Please add the agreed salary amount'
          ],

          'annual_increment' => [
              'required'=> 'Please add the annual increment percentage'
          ],

         //  'salary_period_from' => [
         //      'required'=> 'Please add when salary due date starts'
         //  ],
         //
         //  'salary_period_to' => [
         //      'required'=> 'Please add salary due date'
         // ],

         'contact_number' => [
             'required'          => 'Please enter contact number',
             'mobileValidation'  => 'Invalid contact number format',
             'is_unique'         => 'Contact already exists'
         ],
    ];


}
