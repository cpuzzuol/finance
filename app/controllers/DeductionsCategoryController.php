<?php

class DeductionsCategoryController extends \BaseController {

	protected $deductionsCategory;

  public function __construct(DeductionsCategory $deductionsCategory){
    $this->deductionsCategory = $deductionsCategory;
  }

  /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('deductions-category.index')->with(array('categories'=> DeductionsCategory::lists('deduction','id'), 'message'=>'success'));
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
		return DeductionsCategory::lists('deduction','id');
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
		$input = ['deductions' => Input::get('category_name')];
    $rules = ['category_name' => 'required'];

    $validation = new Validating\ValidateForms($rules);

    if($validation->passes()){
      $record = $this->deductionsCategory->find($id);
      $record->deduction = Input::get('category_name');
      $record->save();

      return View::make('deductions-category.index')->with(array('categories'=> DeductionsCategory::lists('deduction','id'), 'message'=>'success'));
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
