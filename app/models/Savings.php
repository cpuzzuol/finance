<?php

class Savings extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

  protected $table = 'fin_savings';

  protected $fillable = ['user_id','savings_id','savings_desc','savings_date','amount'];

}
