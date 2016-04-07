<?php


class AdminController extends \BaseController {

/*
public function __construct() {

        $this->beforeFilter('auth');

}*/

public function getIndex(){

    return View::make('admin/login');
}

public function postLogin() {


	// Obtenemos los datos del formulario
    $data = [
        'usuario' => Input::get('username'),
        'password' => Input::get('password')
    ];

    // Validamos los datos
if (Auth::attempt($data)) {

     return Redirect::to('admin/dashboard');

    } else {

     return Redirect::to('login');

    }

    
}


 public function getDashboard(){
    if(Auth::check()){
      return View::make('admin/admin');
    } else {
        return Redirect::to('login');
    }
 }


public function logOut() {
    Auth::logout();
    return Redirect::to('login');
}



}//AdminController
