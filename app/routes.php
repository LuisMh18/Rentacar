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

Route::get('/', function() {

			$sucursal = DB::table('sucursal')
								->select('id', 'nombre_sucursal', 'gerente_id')
								->orderBy('nombre_sucursal', 'ASC')
								->get();


	return View::make('reservas', 	compact(
										  'sucursal'
										));
});


Route::get('login', 'AdminController@getIndex');
Route::post('login', 'AdminController@postLogin');
Route::get('logout', 'AdminController@logOut');

//Admin
Route::controller('admin', 'AdminController');


Route::controller('password', 'RemindersController');

Route::get('confirmar/datosdelpedido/{id}', 'AdminController@datosdelpedido');

Route::get('confirmar/eliminarsesion', 'AdminController@eliminarsesion');

Route::get('confirmar/imprimir/{id}', 'AdminController@imprimir');
