<?php

class DeductionsController extends \BaseController {

	protected $deductions;
  protected $categories;

  public function __construct(Deductions $deductions, DeductionsCategoryController $categories){
      $this->deductions = $deductions;
      $this->categories = $categories;
  }

  /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return "home of deductions";
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('deductions.create')->with('categories', $this->categories->show(null));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = [
      'user_id' => Auth::id(),
      'deductions_id' => Input::get('categories'),
      'deductions_desc' => Input::get('description'),
      'deductions_date' => date('Y-m-d'),
      'amount' => Input::get('amount')
    ];
    $rules = [
      'user_id' => 'integer',
      'deductions_id' => 'integer',
      'deductions_date' => 'dateFormat:YYYY-MM-DD',
      'amount' => 'required|numeric'
    ];

    $validation = new Validating\ValidateForms($rules);

    if($validation->passes()){
      $newRecord = $this->deductions->create($input);
      return Redirect::route('deductions.edit', array('id' => $newRecord->id))->with('message', 'success');
    }

    return Redirect::back()->withInput()->withErrors($validation->getErrors())->with('message', 'errors');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$newRecord = $this->deductions->where('id','=',$id)->get();

    return View::make('deductions.edit', array('records'=> $newRecord, 'categories' => $this->categories->show(null)));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = [
      'deductions_id' => Input::get('categories'),
      'deductions_desc' => Input::get('description'),
      'deductions_date' => date('Y-m-d'),
      'amount' => Input::get('amount')
    ];
    $rules = [
      'user_id' => 'integer',
      'deductions_id' => 'integer',
      'deductions_date' => 'dateFormat:YYYY-MM-DD',
      'amount' => 'required|numeric'
    ];

    $validation = new Validating\ValidateForms($rules);

    if($validation->passes()){
      $record = $this->deductions->find($id);
      $record->deduction_id = $input['income_id'];
      $record->deduction_desc = $input['income_desc'];
      $record->deduction_date = $input['income_date'];
      $record->amount = $input['amount'];
      $record->save();
      return Redirect::route('deductions.edit', array('id' => $record->id));
    }

    return Redirect::back()->withInput()->withErrors($validation->getErrors());
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
