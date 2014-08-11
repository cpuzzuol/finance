<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});



Route::resource('users', 'UserController');

Route::get('login','SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');

Route::resource('income', 'IncomeController');
Route::resource('income-category', 'IncomeCategoryController');
Route::resource('savings', 'SavingsController');
Route::resource('savings-category', 'SavingsCategoryController');
Route::resource('deductions', 'DeductionsController');
Route::resource('deductions-category', 'DeductionsCategoryController');
Route::resource('expenditures', 'ExpendituresController');
Route::resource('expenditures-category', 'ExpendituresCategoryController');

// optional category with a default
Route::put('income-category/update/', array('uses'=>'IncomeCategoryController.update'));
