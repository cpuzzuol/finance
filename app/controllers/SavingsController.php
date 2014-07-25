<?php

class SavingsController extends \BaseController {

	protected $savings;
  protected $categories;

  public function __construct(Savings $savings, SavingsCategoryController $categories){
      $this->savings = $savings;
      $this->categories = $categories;
  }

  /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return "home of savings";
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('savings.create')->with('categories', $this->categories->show(null));
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
      'savings_id' => Input::get('categories'),
      'savings_desc' => Input::get('description'),
      'savings_date' => date('Y-m-d'),
      'amount' => Input::get('amount')
    ];
    $rules = [
      'user_id' => 'integer',
      'savings_id' => 'integer',
      'savings_date' => 'dateFormat:YYYY-MM-DD',
      'amount' => 'required|numeric'
    ];

    $validation = new Validating\ValidateForms($rules);

    if($validation->passes()){
      $newRecord = $this->savings->create($input);
      return Redirect::route('savings.edit', array('id' => $newRecord->id))->with('message', 'success');
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
		$newRecord = $this->savings->where('id','=',$id)->get();

    return View::make('savings.edit', array('records'=> $newRecord, 'categories' => $this->categories->show(null)));
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
      'savings_id' => Input::get('categories'),
      'savings_desc' => Input::get('description'),
      'savings_date' => date('Y-m-d'),
      'amount' => Input::get('amount')
    ];
    $rules = [
      'user_id' => 'integer',
      'savings_id' => 'integer',
      'savings_date' => 'dateFormat:YYYY-MM-DD',
      'amount' => 'required|numeric'
    ];

    $validation = new Validating\ValidateForms($rules);

    if($validation->passes()){
      $record = $this->savings->find($id);
      $record->savings_id = $input['income_id'];
      $record->savings_desc = $input['income_desc'];
      $record->savings_date = $input['income_date'];
      $record->amount = $input['amount'];
      $record->save();
      return Redirect::route('savings.edit', array('id' => $record->id));
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
