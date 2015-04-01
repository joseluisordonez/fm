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
Route::get('nosotros', 'HomeController@nosotros');


//Route::get('/{pagina}', 'HomeController@paginas');

/*Ejemplos de Rutas
Route::get('/{pagina}', function($pagina)
	{
		return "hola ".$pagina;
		
		});*/