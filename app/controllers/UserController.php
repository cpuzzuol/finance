<?php

class UserController extends \BaseController {

	protected $user;

  //inject User class through the constructor (Laravel will do for you automatically)
  //could also code this through an interface (more advanced)
  public function __construct(User $user){
    $this->user = $user;
  }


  /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
    $users = $this->user->all();
    return View::make('users.index')->with('users', $users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

    $input = [
      'username' => Input::get('username'),
      'password' => Hash::make(Input::get('password')),
      'email' => Input::get('email'),
      'terms' => Input::get('terms')
    ];


    if(!User::isValid($input)){
      return Redirect::back()->withInput()->withErrors(User::$errors);
    }

    $newUser = User::create($input);

    return View::make('users.edit', ['id'=>$newUser->id];
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$users = $this->user->all();
    return View::make('users.index')->with('users', $users);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$newUser = $this->user->where('id','=',$id)->get();

    return View::make('users.edit', array('newUser'=> $newUser));
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
      'email' => Input::get('email')
    ];

    if(!User::isValid($input)){
      return Redirect::back()->withInput()->withErrors(User::$errors);
    }

	  $record = $this->user->find($id);
    $record->email = Input::get('email');
    $record->save();

    return View::make('users.index');
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
