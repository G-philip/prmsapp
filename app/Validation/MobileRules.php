<?php
namespace App\Validation;
use App\Models\GuardianModel;

class MobileRules{

  // Rule is to validate mobile number digits
public function mobileValidationn(string $str, string $fields, array $data){

  /*Checking: Number must start from 5-9{Rest Numbers}*/
  if(preg_match( '/^[5-9]{1}[0-9]+/', $data['contact_number'])){

    /*Checking: Mobile number must be of 10 digits*/
    $bool = preg_match('/^[0-9]{10}+$/', $data['contact_number']);
    return $bool == 0 ? false : true;

  }else{

    return false;
  }
}

// here we have created a custom rule method of already existence check of mobile number
//public function alreadyExists(string $str, string $fields, array $data){

  //$model = new StudentModel();
  //$data = $model->where('mobile', $data['mobile'])
                //->first();

  //if(!$data)
    //return false; // mobile number already there

  //return true; // mobile number not found
//}


  function mobileValidation($contact_number)
{
        if (preg_match('/^\+\d{1,3}\s?\(?\d{2}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/', $contact_number))
        {
          return TRUE;
        }else
        {
          return FALSE;
        }
    }

    function isDigits(string $s, int $minDigits = 9, int $maxDigits = 14): bool {
          return preg_match('/^[0-9]{'.$minDigits.','.$maxDigits.'}\z/', $s);
      }

      function isValidTelephoneNumber(string $contact_number, int $minDigits = 9, int $maxDigits = 14): bool {
          if (preg_match('/^[+][0-9]/', $contact_number)) { //is the first character + followed by a digit
              $count = 1;
              $contact_number = str_replace(['+'], '', $contact_number, $count); //remove +
          }

          //remove white space, dots, hyphens and brackets
          $contact_number = str_replace([' ', '.', '-', '(', ')'], '', $contact_number);

          //are we left with digits only?
          return isDigits($contact_number, $minDigits, $maxDigits);
      }

    function normalizeTelephoneNumber(string $contact_number): string {
        //remove white space, dots, hyphens and brackets
        $contact_number = str_replace([' ', '.', '-', '(', ')'], '', $contact_number);
        return $contact_number;

        //$tel = '+9112 345 6789';
        if (isValidTelephoneNumber($contact_number)) {
            //normalize telephone number if needed
            return normalizeTelephoneNumber($contact_number); //+91123456789
      }
    }


}
