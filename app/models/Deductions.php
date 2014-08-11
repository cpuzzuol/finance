class Deductions extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

  protected $table = 'fin_deductions';

  protected $fillable = ['user_id','deduction_id','deduction_desc','deduction_date','amount'];

}
