<?php

class IncomeCategoryController extends \BaseController {

	protected $incomeCategory;

  public function __construct(IncomeCategory $incomeCategory){
    $this->incomeCategory = $incomeCategory;
  }

  /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
    	return View::make('income-category.index')->with(array('categories'=> IncomeCategory::orderBy('order')->lists('income','id'), 'message'=>'created'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return "CREATE!";
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = [
		  'income' => Input::get('category_name'),
		];
		$rules = [
		  'income' => 'required',
		];
	
		$validation = new Validating\ValidateForms($rules, $input);
	
		if($validation->passes()){
		  $newRecord = $this->incomeCategory->create($input);
		  return Redirect::route('income-category.index')->with('message', 'created');
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
    return IncomeCategory::lists('income','id');
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
    $input = ['income' => Input::get('category_name')];
    $rules = ['category_name' => 'required'];

    $validation = new Validating\ValidateForms($rules);

    if($validation->passes()){
      $record = $this->incomeCategory->find($id);
      $record->income = Input::get('category_name');
      $record->save();

      return View::make('income-category.index')->with(array('categories'=> IncomeCategory::orderBy('order')->lists('income','id'), 'message'=>'updated'));
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
		$this->incomeCategory->find($id)->delete();
		return Redirect::route('income-category.index')->with('message', 'deleted');
	}

	public function first(){
		return View::make('income-category.selber');	
	}
	
	public function second(){	
		$orders = Input::all();
		
		foreach($orders as $order){
			$folge[] = $order;	
		}
		
		return Response::json($orders);
	}
}
