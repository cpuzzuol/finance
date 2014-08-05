<?php

class PlannerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return "home of planner";
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = DB::table('fin_income_category')->lists('income','id');
    return View::make('planner.create')->with('categories', $categories);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$newIncome = new Income(Input::get('table_name'));
    $newIncome->user_id = '1';
    $newIncome->income_id = Input::get('categories');
    $newIncome->income_desc = "Test YO!";
    $newIncome->income_date = date('Y-m-d');
    $newIncome->amount = Input::get('amount');
    $newIncome->save();


    return Redirect::route('planner.edit', array('id' => $newIncome->id));
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
    $newIncome = new Income('fin_income');
    $newRecord = $newIncome->where('id','=',$id)->get();
    //$income_categories = Income::getIncomeCategories();
    return View::make('planner.edit', array('record'=>$newRecord));
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
