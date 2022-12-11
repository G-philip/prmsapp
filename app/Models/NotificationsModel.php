<?php

namespace App\Models;

class NotificationsModel extends \CodeIgniter\Model
{
    protected $table		  = 'notice_board';

    protected $allowedFields  = ['title','start_at', 'end_at', 'description', 'location' ];

    protected $returnType ='App\Entities\Notification';

    protected $useTimestamps = true;

    protected $validationRules = [

    			'title' 			=>'required',
          'start_at'   =>'required',
          'end_at'   =>'required',
          'description'   =>'required',
          'location'   =>'required'
    			];

    protected $validationMessages = [

    			// 'category_name' => [
    			// 	'required'=> 'Please enter expense category'
    			// ],
          //
          // 'category_description' => [
    			// 	'required'=> 'Please enter expense category description'
    			// ]
    ];

}
