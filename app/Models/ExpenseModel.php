<?php

namespace App\Models;

use CodeIgniter\Model;

//use App\Models\DepartmentModel;

class ExpenseModel extends Model
{
    protected $table		  = 'expenses';

    protected $allowedFields  = [
      'expense_name', 'category_id', 'expense_id', 'payment_method', 'amount', 'expense_description',
    ];

    protected $returnType ='App\Entities\Expense';

    protected $useTimestamps = true;

    protected $validationRules = [

    			'expense_name' 			     =>'required',
    			'category_id'	           =>'required',
          'expense_id'             =>'required',
          'payment_method'         =>'required',
          'amount'                 =>'required',
          'expense_description'    =>'required'
    			];

    protected $validationMessages = [

    			'expense_name' => [
    				'required'=> 'Please enter expense name'
    			],

    			'category_id' => [
    				'required'=> 'Please select expense category'
    			],

                'expense_id' => [
                    'required'=> 'Please enter expense ID'
                ],

                'payment_method' => [
                    'required'=> 'Please select payment method'
                ],

                'amount' => [
                    'required'=> 'Please enter amount incured'
                ],

                'expense_description' => [
                    'required'=> 'Please enter the expense description'
                ]
    ];


}
