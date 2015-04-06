<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('home');
	}
	public function quienessomos()
	{
		return View::make('quienessomos');
	}
	public function login()
	{
		return View::make('login');
	}
	public function historia()
	{
		return View::make('historia');
	}
	public function contacto()
	{
		return View::make('contacto');
	}
	public function servicios()
	{
		return View::make('servicios');
	}

}
