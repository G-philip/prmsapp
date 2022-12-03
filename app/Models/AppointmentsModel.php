<?php

namespace App\Models;

class AppointmentsModel extends \CodeIgniter\Model
{

    protected $table = 'appointment_schedules';

    protected $primaryKey = 'appointment_id';

    protected $allowedFields = [
      'patient_id', 'doctor_id', 'schedule', 'start_at', 'end_at'
    ];

    protected $returnType    = 'App\Entities\Appointment';

    protected $useTimestamps = true;

    protected $validationRules = [
    			//'appointment_code' 			=>'required',
    			'patient_id'	    =>'required',
          'doctor_id'               =>'required|integer',
          'schedule'            =>'required',
          'start_at'         =>'required',
          'end_at'    =>'required',
    			];

     protected $validationMessages = [

    			'appointment_code' => [
        				'required'=> 'Please enter appointment code'
    			],

    			'patient_id'=> [
      				'required'    => 'Please assign patient an appointment'
    			],
          'doctor_id' => [
      				'required'=> 'Select doctor please'
    			],

          'schedule' => [
              'required' => 'please add schedule'
          ],

          'start_at' => [
              'required' => 'Session start time is required'
          ],

          'end_at' => [
              'required' => 'Session end time is required'
          ],
    ];

    protected $skipValidation     = false;

    public function generateRandomString($length = 10) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 3)];
    }
    return $randomString;
    }
}
