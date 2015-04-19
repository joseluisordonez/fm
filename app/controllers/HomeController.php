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
	public function servicios()
	{
		return View::make('servicios');
	}

	/*------ Contacto ----------*/
	public function showContacto()
	{
		$mensaje=null;
		return View::make('contacto', array('mensaje'=>$mensaje));
	}
	public function postContacto()
	{

		$data = array(
            'nombre' => Input::get('nombre'),
            'email'=> Input::get('email'),
            'mensaje'=> Input::get('mensaje')
        );

		$mensaje= '<div class="panel panel-blue"><div class="panel-heading">El mensaje se ha enviado con éxito</div></div>';

        $fromEmail='admin@funeralesmodelo.com';
        $fromName='Administrador';

		Mail::send('emails/contacto', $data, function ($message) use ($fromEmail, $fromName){
		$message->subject('Mensaje enviado desde pagina WEB');
		$message->to('admin@funeralesmodelo.com');
		});
		
		return View::make('contacto', array('mensaje'=>$mensaje));


	}
}
