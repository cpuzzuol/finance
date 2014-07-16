<?php namespace Validating;

/******
 *
 * Makes adding the same validation script to every form unnecessary!
 *
 */

class ValidateForms{

  protected $input;
  protected $errors;

  public function __construct($rules, $input = NULL){
    $this->rules = $rules;
    $this->input = $input ?: \Input::all();
  }

  //code for when validation is successful or unsuccessful
  public function passes(){
    $validation = \Validator::make($this->input, $this->rules);

    if($validation->passes()) return true;

    $this->errors = $validation->messages();

    return false;
  }

  public function getErrors(){
    return $this->errors;
  }
}
