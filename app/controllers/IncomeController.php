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
    $newIncome = [
      'user_id' => '1',
      'income_id' => Input::get('categories'),
      'username' => Input::get('username'),
      'income_desc' => 'Test YO!',
      'income_date' => date('Y-m-d'),
      'amount' => Input::get('amount')
    ];

    $bully = $this->income->create($newIncome);


    return Redirect::route('income.edit', array('id' => $bully->id));
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
		//
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
