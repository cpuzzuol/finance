<?php

class Expenditures extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

  protected $table = 'fin_expenses';

  protected $fillable = ['user_id','expense_id','expense_desc','expense_date','amount'];

}
