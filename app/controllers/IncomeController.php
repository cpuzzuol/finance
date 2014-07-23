<?php

class IncomeController extends \BaseController {

	protected $income;
  protected $categories;

  public function __construct(Income $income, IncomeCategoryController $categories){
      $this->income = $income;
      $this->categories = $categories;
  }

  /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return "home of income";
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
    return View::make('income.create')->with('categories', $this->categories->show(null));
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
      'income_id' => Input::get('categories'),
      'income_desc' => Input::get('description'),
      'income_date' => date('Y-m-d'),
      'amount' => Input::get('amount')
    ];
    $rules = [
      'user_id' => 'integer',
      'income_id' => 'integer',
      'income_date' => 'dateFormat:YYYY-MM-DD',
      'amount' => 'required|numeric'
    ];

    $validation = new Validating\ValidateForms($rules);

    if($validation->passes()){
      $newRecord = $this->income->create($input);
      return Redirect::route('income.edit', array('id' => $newRecord->id))->with('message', 'success');
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
    $newRecord = $this->income->where('id','=',$id)->get();

    return View::make('income.edit', array('records'=> $newRecord, 'categories' => $this->categories->show(null)));
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
      'income_id' => Input::get('categories'),
      'income_desc' => Input::get('description'),
      'income_date' => date('Y-m-d'),
      'amount' => Input::get('amount')
    ];
    $rules = [
      'user_id' => 'integer',
      'income_id' => 'integer',
      'income_date' => 'dateFormat:YYYY-MM-DD',
      'amount' => 'numeric'
    ];

    $validation = new Validating\ValidateForms($rules);

    if($validation->passes()){
      $record = $this->income->find($id);
      $record->income_id = $input['income_id'];
      $record->income_desc = $input['income_desc'];
      $record->income_date = $input['income_date'];
      $record->amount = $input['amount'];
      $record->save();
      return Redirect::route('income.edit', array('id' => $record->id));
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
