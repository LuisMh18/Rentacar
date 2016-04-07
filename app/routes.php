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
	return View::make('hello');
});


Route::get('login', 'AdminController@getIndex');
Route::post('login', 'AdminController@postLogin'); 
Route::get('logout', 'AdminController@logOut');

//Admin
Route::controller('admin', 'AdminController');


Route::get('registrar', function(){
	$usuario = new Usuario;
	$usuario->usuario = 'Luis99';
	$usuario->password = Hash::make('12345678');
	$usuario->email = 'luis_mh@outlook.es';
	$usuario->save();
});

