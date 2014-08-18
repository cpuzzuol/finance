<?php

class IncomeCategory extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

  protected $table = 'fin_income_category';

  protected $fillable = ['income', 'order'];

}
