<?php

namespace App\Models;

class CategoryModel extends \CodeIgniter\Model
{
    protected $table		  = 'expense_category';

    protected $allowedFields  = ['category_name','category_description'];

    protected $returnType ='App\Entities\Category';

    protected $useTimestamps = true;
    
    protected $validationRules = [

    			'category_name' 			=>'required',
          'category_description'   =>'required'
    			];

    protected $validationMessages = [

    			'category_name' => [
    				'required'=> 'Please enter expense category'
    			],

          'category_description' => [
    				'required'=> 'Please enter expense category description'
    			]
    ];

}
