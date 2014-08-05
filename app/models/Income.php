<?php

class Income extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

  protected $table = 'fin_income';

  protected $fillable = ['user_id','income_id','income_desc','income_date','amount'];

}
