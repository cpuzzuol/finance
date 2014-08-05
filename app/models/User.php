<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'fin_users';


  protected $fillable = ['username','email','password'];


  public static $errors;

	/**
	 * The attributes excluded from the model's JSON form.
	 *
   * PASSWORDS MUST BE AT LEAST 64 CHARACTERS LONG IN 'USERS' TABLE!
   *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

  public function getAuthIdentifier()
  {
      return $this->getKey();
  }

  /**
   * Get the password for the user.
   *
   * @return string
   */
  public function getAuthPassword()
  {
      return $this->password;
  }

  /**
   * Get the e-mail address where password reminders are sent.
   *
   * @return string
   */
  public function getReminderEmail()
  {
      return $this->email;
  }

}