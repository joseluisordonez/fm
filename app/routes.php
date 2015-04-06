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
Route::get('/home', 'HomeController@showWelcome');
//homecontroller es el archivo controlador y @nosotros es la funcion en ese archivo
Route::get('/quienessomos', 'HomeController@quienessomos');
Route::get('/login', 'HomeController@login');
Route::get('/historia', 'HomeController@historia');
Route::get('/contacto', 'HomeController@contacto');
Route::get('/servicios', 'HomeController@servicios');
