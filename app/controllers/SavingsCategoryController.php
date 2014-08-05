<?php

class SavingsCategoryController extends \BaseController {

	protected $savingsCategory;

  public function __construct(SavingsCategory $savingsCategory){
    $this->savingsCategory = $savingsCategory;
  }

  /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('savings-category.index')->with(array('categories'=> SavingsCategory::lists('savings','id'), 'message'=>'success'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return SavingsCategory::lists('savings','id');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = ['savings' => Input::get('category_name')];
    $rules = ['category_name' => 'required'];

    $validation = new Validating\ValidateForms($rules);

    if($validation->passes()){
      $record = $this->savingsCategory->find($id);
      $record->savings = Input::get('category_name');
      $record->save();

      return View::make('savings-category.index')->with(array('categories'=> IncomeCategory::lists('income','id'), 'message'=>'success'));
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
