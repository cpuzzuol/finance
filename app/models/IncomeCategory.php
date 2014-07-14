<?php

class IncomeCategory extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

  protected $table = 'fin_income_category';

  protected $fillable = ['income'];

  public static $errors;

  //store validation rules
  public static $rules = [
    'income' => 'required'
  ];

  public static function isValid($data){
     if(!Validating\ValidateForms::isValid($data, static::$rules)){
       static::$errors = Validating\ValidateForms::$errors;
       return false;
     } else {
       return true;
     }
  }

}
