<?php

class SessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::check()){

      return Redirect::to('/');

    }
    return View::make('sessions.create');
	}


	/**
	 * Responsible for authenicating the user.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(Auth::attempt(Input::only('username','password'))){

      return "Willkommen " . Auth::user()->username;

    }

    return Redirect::back()->withErrors(['user' => 'user failed.', 'password'=>'password failed'])->withInput();
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
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();

    //$message = "Sie wurden erfolgreich abgemeldet";
    return Redirect::route('sessions.create');
	}


}
