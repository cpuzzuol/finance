<?php

class ExpendituresController extends \BaseController {

	protected $expenditures;
  protected $categories;

  public function __construct(Expenditures $expenditures, ExpendituresCategoryController $categories){
      $this->expenditures = $expenditures;
      $this->categories = $categories;
  }

  /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return "home of expenditures";
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('expenditures.create')->with('categories', $this->categories->show(null));
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
      'expense_id' => Input::get('categories'),
      'expense_desc' => Input::get('description'),
      'expense_date' => date('Y-m-d'),
      'amount' => Input::get('amount')
    ];
    $rules = [
      'user_id' => 'integer',
      'expense_id' => 'integer',
      'expense_date' => 'dateFormat:YYYY-MM-DD',
      'amount' => 'required|numeric'
    ];

    $validation = new Validating\ValidateForms($rules);

    if($validation->passes()){
      $newRecord = $this->expenditures->create($input);
      return Redirect::route('expenditures.edit', array('id' => $newRecord->id))->with('message', 'success');
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
		$newRecord = $this->expenditures->where('id','=',$id)->get();

    return View::make('expenditures.edit', array('records'=> $newRecord, 'categories' => $this->categories->show(null)));
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
      'expense_id' => Input::get('categories'),
      'expense_desc' => Input::get('description'),
      'expense_date' => date('Y-m-d'),
      'amount' => Input::get('amount')
    ];
    $rules = [
      'user_id' => 'integer',
      'expense_id' => 'integer',
      'expense_date' => 'dateFormat:YYYY-MM-DD',
      'amount' => 'required|numeric'
    ];

    $validation = new Validating\ValidateForms($rules);

    if($validation->passes()){
      $record = $this->expenditures->find($id);
      $record->expense_id = $input['income_id'];
      $record->expense_desc = $input['income_desc'];
      $record->expense_date = $input['income_date'];
      $record->amount = $input['amount'];
      $record->save();
      return Redirect::route('expenditures.edit', array('id' => $record->id));
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
