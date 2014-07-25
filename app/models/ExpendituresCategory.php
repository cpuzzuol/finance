<?php

class ExpendituresCategory extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

  protected $table = 'fin_expense_category';

  protected $fillable = ['expense'];

}
