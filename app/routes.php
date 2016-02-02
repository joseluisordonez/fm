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
Route::get('/', 'HomeController@showWelcome');
//homecontroller es el archivo controlador y @nosotros es la funcion en ese archivo
Route::get('/quienessomos', 'HomeController@quienessomos');
Route::get('/historia', 'HomeController@historia');
Route::get('/servicios', 'HomeController@servicios');
Route::get('/pantalla', 'HomeController@pantalla');
/*
------------------------------------------------------------------------------
Rutas para el Contacto
------------------------------------------------------------------------------
*/

Route::get('/contacto', 'HomeController@showContacto');
Route::post('/contacto', 'HomeController@postContacto');



/* 
------------------------------------------------------------------------------
Rutas para el Login
------------------------------------------------------------------------------
*/

// Nos mostrará el formulario de login.
Route::get('/login', 'AuthController@showLogin');

// Validamos los datos de inicio de sesión.
Route::post('/login', 'AuthController@postLogin');

// Nos indica que las rutas que están dentro de él sólo serán mostradas si antes el usuario se ha autenticado.
Route::group(array('before' => 'auth'), function()
{
    // Esta será nuestra ruta de bienvenida del administrador
  	Route::group(array('prefix'=>'admin'),function()
  	{
  		Route::get('/', 'ObituarioController@index');
  	});
  	Route::put('/{capilla}',['uses'=> 'ObituarioController@update']);
    // Esta ruta nos servirá para cerrar sesión.
    Route::get('/logout', 'AuthController@logOut');
});

App::missing(function($exception)
{
	return Response::view('error',array(), 404);
});
