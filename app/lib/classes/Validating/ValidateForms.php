<?php namespace Validating;

/******
 *
 * Makes adding the same validation script to every form unnecessary!
 *
 */

abstract class ValidateForms{

  public static $errors;

  public static function isValid($data, $rules){

     $validator = \Validator::make($data, $rules);
     if($validator->passes()) return true;

     //assign errors to a static property
     static::$errors = $validator->messages();

     //return static::$errors;
     return false;
  }

}
