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

	Session::flash('messageDanger', 'Nombre de usuario o contraseña son incorrectos.');
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



/*******
Reservas------------
********************************************************/
	public function getMostrarsucursales(){
		$id = Input::get('id');

	$sucursal = DB::table('sucursal')
			->where('id', $id)
	 	  ->first();

  $tel_sucursal = DB::table('telefono_sucursal')
      ->join('tipo_tel', 'telefono_sucursal.tipo_tel_id', '=', 'tipo_tel.id')
			->where('telefono_sucursal.sucursal_id', $id)
	 	  ->get();

    $tel_s_cantidad = DB::table('telefono_sucursal')
        ->join('tipo_tel', 'telefono_sucursal.tipo_tel_id', '=', 'tipo_tel.id')
  			->where('telefono_sucursal.sucursal_id', $id)
  	 	  ->count();

   return Response::json(array(
            'sucursal' => $sucursal,
            'tel_sucursal' => $tel_sucursal,
            'tel_s_cantidad' => $tel_s_cantidad
          ));
}

//mostrar codigos de los vehiculos
public function getMostrarcodigosdelvehiculo(){

  $codigos = DB::table('codigo')
              ->where('estatus', 1)
              ->distinct('descripcion_codigo')
              ->select('id', 'descripcion_codigo')
              ->orderBy('descripcion_codigo', 'asc')
              ->get();

  return Response::json(array('codigos' => $codigos));
}


//Comparar fechas
public function getCompararfechas(){
	$lugar_entrega = Input::get('lugar_entrega');

	//obtenemos la sucursal
	$s = DB::table('sucursal')
						->where('id', $lugar_entrega)
						->pluck('oficina_id');

  $plaza_id = DB::table('oficina')
            ->where('id', $s)
            ->pluck('plaza_id');

  $f = DB::table('tarifa')
              ->where('oficina_id', $s)
              ->orderBy('fecha_inicio', 'asc')
              ->get();

	return Response::json(
		       array(
									'f' => $f,
                  'plaza_id' => $plaza_id
								));
}



//Datos del vehiculo
public function getDatosvehiculo(){
	$codigo = Input::get('codigo');
  $id_t = Input::get('id_t');
	$plaza_id = Input::get('plaza_id');

	$vehiculo = DB::table('tipo_vehiculo')
                  ->join('tipo_vehiculo_plaza', 'tipo_vehiculo.id', '=', 'tipo_vehiculo_plaza.tipo_vehiculo_id')
									->where('codigo_id', $codigo)
									->where('tipo_vehiculo.estatus', 1)
                  ->where('tipo_vehiculo_plaza.plaza_id', $plaza_id)
									->select('tipo_vehiculo.id', 'descripcion', 'foto')
									->get();

	return Response::json(
		       array(
										'vehiculo' => $vehiculo
								));

}



//Datos dela tarifa detalle
public function getDatostarifadetalle(){

	$id_v = Input::get('id_v');
	$id_t = Input::get('id_t');



			$tarifa = DB::table('tarifa_detalle')
								->join('tipo_vehiculo', 'tarifa_detalle.tipo_vehiculo_id', '=', 'tipo_vehiculo.id')
								->join('cobertura', 'tarifa_detalle.cobertura_id', '=', 'cobertura.id')
                ->join('codigo', 'tarifa_detalle.codigo_id', '=', 'codigo.id')
								->where('tarifa_id', $id_t)
								->where('tipo_vehiculo_id', $id_v)
                //->where('tarifa_detalle.codigo_id', 24)
                ->where('tarifa_detalle.estatus', 1)
								->select('tipo_vehiculo.id', 'descripcion', 'foto', 'transmision' ,'tarifa_por_dia', 'cobertura', 'descripcion_codigo')
								->get();


	if(count($tarifa) == 0){
      $t = 0;
      return Response::json(array('t' => $t));

	} else {
      $t = 1;
	return Response::json(
		       array(
                    't' => $t,
										'tarifa' => $tarifa
									));

	}



}




//comprobar si el cliente ya tiene reservas
public function getComprobardatos(){
	$email = Input::get('email');

			$cliente = DB::table('cliente')
											->where('email', $email)
											->first();

	return Response::json($cliente);

}

//Registrar reservas
public function postRegistrareserva(){
	//Datos de entrega
  $fecha_entrega = Input::get('fecha_entrega');
  $id_sucursal_entrega = Input::get('id_sucursal_entrega');
	$hora_entrega = Input::get('hora_entrega');
	$lugar_entrega = Input::get('lugar_entrega');
  $direccion1 = Input::get('direccion1');
  $direccion2 = Input::get('direccion2');
  $colonia = Input::get('colonia');
  $estado = Input::get('estado');
  $municipio = Input::get('municipio');
  $cp = Input::get('cp');
  $referencia = Input::get('referencia');
  $tel_e_1 = Input::get('tel_e_1');
  $tel_e_2 = Input::get('tel_e_2');
  $tel_e_3 = Input::get('tel_e_3');
  $tel_e_4 = Input::get('tel_e_4');
  $num_e_1 = Input::get('num_e_1');
  $num_e_2 = Input::get('num_e_2');
  $num_e_3 = Input::get('num_e_3');
  $num_e_4 = Input::get('num_e_4');

	//Datos de devolucion
	$fecha_devolucion = Input::get('fecha_devolucion');
  $id_sucursal_devolucion = Input::get('id_sucursal_devolucion');
	$hora_devolucion = Input::get('hora_devolucion');
	$lugar_devolucion = Input::get('lugar_devolucion');
  $direccion1_d = Input::get('direccion1_d');
  $direccion2_d = Input::get('direccion2_d');
  $colonia_d = Input::get('colonia_d');
  $estado_d = Input::get('estado_d');
  $municipio_d = Input::get('municipio_d');
  $cp_d = Input::get('cp_d');
  $referencia_d = Input::get('referencia_d');
  $tel_d_1 = Input::get('tel_d_1');
  $tel_d_2 = Input::get('tel_d_2');
  $tel_d_3 = Input::get('tel_d_3');
  $tel_d_4 = Input::get('tel_d_4');
  $num_d_1 = Input::get('num_d_1');
  $num_d_2 = Input::get('num_d_2');
  $num_d_3 = Input::get('num_d_3');
  $num_d_4 = Input::get('num_d_4');

  //si la hora de devolucion supera a las 3 horas de la de entrega -------------------------------
  $hora_mayor_3_horas = Input::get('hora_mayor_3_horas');

	//vehiculo
	$vehiculo = Input::get('vehiculo');

	//tarifa
	$tarifa = Input::get('tarifa');

		//dias
	$dias = Input::get('dias');

	//transmision
	$transmision = Input::get('transmision');

	//datos del cliente
	$email = Input::get('email');
	$nombre = Input::get('nombre');
	$ap = Input::get('ap');
	$tel = Input::get('tel');
	$lic = Input::get('lic');
	$coment = Input::get('coment');

	//Registramos los datos del cliente
	   $c = new Cliente;
		$c->id = Input::get('id');
		$c->nombre = $nombre;
		$c->apellidos = $ap;
		$c->email = $email;
		$c->telefono = $tel;
	    $c->num_licencia = $lic;
		$c->comentarios = $coment;
		$c->save();

		//lugar de entrega
	 $s_e = DB::table('sucursal')
							->where('id', $lugar_entrega)
							->pluck('nombre_sucursal');

	//lugar de devolucion
	 $s_d = DB::table('sucursal')
							->where('id', $lugar_devolucion)
						 ->pluck('nombre_sucursal');


	//obtenemos los datos del vehiculo
	$v_t = DB::table('tipo_vehiculo')
							->where('id', $vehiculo)
							->pluck('transmision');

	$v_desc = DB::table('tipo_vehiculo')
							->where('id', $vehiculo)
							->pluck('descripcion');

	$v_foto = DB::table('tipo_vehiculo')
							->where('id', $vehiculo)
							->pluck('foto');


	//registramos la reserva
		$r = new Reserva;
		$r->id = Input::get('id');
		$r->cliente_id = $c['id'];
		$r->num_reserva = date('Y').date('m').date("d").date("H").date("i").date("s");
	  $r->lugar_entrega = $s_e;
    $r->direccion1_e = $direccion1;
    $r->direccion2_e = $direccion2;
    $r->colonia_e = $colonia;
    $r->estado_e = $estado;
    $r->municipio_e = $municipio;
    $r->cp_e = $cp;
    $r->referencias_e = $referencia;
    $r->telefono1_e = $tel_e_1." ".$num_e_1;
    $r->telefono2_e = $tel_e_2." ".$num_e_2;
    $r->telefono3_e = $tel_e_3." ".$num_e_3;
    $r->telefono4_e = $tel_e_4." ".$num_e_4;

		$r->fecha_entrega = $fecha_entrega;
	  $r->hora_entrega = $hora_entrega;
		$r->lugar_devolucion = $s_d;
    $r->direccion1_d = $direccion1_d;
    $r->direccion2_d = $direccion2_d;
    $r->colonia_d = $colonia_d;
    $r->estado_d = $estado_d;
    $r->municipio_d = $municipio_d;
    $r->cp_d = $cp_d;
    $r->referencias_d = $referencia_d;
    $r->telefono1_d = $tel_d_1." ".$num_d_1;
    $r->telefono2_d = $tel_d_2." ".$num_d_2;
    $r->telefono3_d = $tel_d_3." ".$num_d_3;
    $r->telefono4_d = $tel_d_4." ".$num_d_4;

		$r->fecha_devolucion = $fecha_devolucion;
	  $r->hora_devolucion = $hora_devolucion;
		$r->tarifa_por_dia = $tarifa;
	  $r->dias = $dias;
	  $r->total = $tarifa * $dias;
	  $r->vehiculo = $v_desc;
	  $r->transmision = $v_t;
	  $r->foto= $v_foto;
		$r->fecha = date('Y-m-d');
    $r->diamas = $hora_mayor_3_horas;
		$r->save();

    //registramos la sesion
    $s = new Sesion;
    $s->cliente_id = $c['id'];
    $s->reserva_id = $r['id'];
    $s->fecha = date('Y-m-d');
    $s->hora = date("g");
    $s->save();

    //eliminamos las sesiones anteriores
    $hoy = date('Y-m-d');
    $hora = date("g");
    $sesion = DB::table('sesion')
            ->where('hora', '<', $hora)
            ->count();

    $sesion_f = DB::table('sesion')
            ->where('fecha', '<', $hoy)
            ->count();

          //echo "Reservas anteriores = "+$sesion;

    if(count($sesion) == 0){
      echo "No hay reservas anteriores";
    } else {

      for ($i=0; $i < $sesion; $i++) {

        $sesion_id = DB::table('sesion')
                ->where('hora', '<', $hora)
                ->orderBy('created_at', 'asc')
                ->pluck('id');

        $s_d = Sesion::find($sesion_id);
        $s_d->delete();

      } //end for
    }

    if(count($sesion_f) == 0){
      echo "No hay reservas anteriores";
    } else {

      for ($i=0; $i < $sesion_f; $i++) {

        $sesion_id_f = DB::table('sesion')
                ->where('fecha', '<', $hoy)
                ->orderBy('created_at', 'asc')
                ->pluck('id');

        $s_d_f = Sesion::find($sesion_id_f);
        $s_d_f->delete();

      } //end for
    }

	return Response::json($r['id']);

}



//Vista de confirmacion
 public function datosdelpedido($id){

				//cliente
		$id_cliente = DB::table('reserva')
					->where('reserva.id', $id)
					->pluck('cliente_id');

      $sesion = DB::table('sesion')
              ->where('reserva_id', $id)
              ->get();

          if(count($sesion) == 0){
            echo "Error, la página solicitada no existe.";
          } else {

            $cliente = DB::table('cliente')
                             ->where('id', $id_cliente)
                             ->get();


             $reserva = DB::table('reserva')
                             ->where('reserva.id', $id)
                             ->get();

            $l_entrega = DB::table('reserva')
                             ->where('reserva.id', $id)
                             ->pluck('lugar_entrega');

            $l_devolucion = DB::table('reserva')
                             ->where('reserva.id', $id)
                             ->pluck('lugar_devolucion');

            $sucursal_entrega = DB::table('sucursal')
                              ->where('nombre_sucursal', $l_entrega)
                              ->pluck('gerente_id');

            $sucursal_devolucion = DB::table('sucursal')
                              ->where('nombre_sucursal', $l_devolucion)
                              ->pluck('gerente_id');

             //obtenemos el emaildel cliente
             $email = DB::table('cliente')
                 ->where('id', $id_cliente)
                 ->pluck('email');


            $gerente_sucursal_entrega = DB::table('gerente')
                              ->where('id', $sucursal_entrega)
                              ->pluck('email');

            $gerente_sucursal_devolucion = DB::table('gerente')
                              ->where('id', $sucursal_devolucion)
                              ->pluck('email');


              Mail::send('emails/confirmacion', compact('reserva', 'cliente'), function($message){
                  $message->from('emotions@hotmail.com', 'emoTions Rent a Car');
                  $message->to('reserva@emotionsrentacar.com');
                  $message->subject('Detalle de reserva.');
              });

              Mail::send('emails/confirmacion', compact('reserva', 'cliente'), function($message) use ($email){
                  $message->from('emotions@hotmail.com', 'emoTions Rent a Car');
                  $message->to($email);
                  $message->subject('Detalle de reserva.');
              });

              if($gerente_sucursal_entrega == $gerente_sucursal_devolucion){

              Mail::send('emails/confirmacion', compact('reserva', 'cliente'), function($message) use ($gerente_sucursal_entrega){
                  $message->from('emotions@hotmail.com', 'emoTions Rent a Car');
                  $message->to($gerente_sucursal_entrega);
                  $message->subject('Detalle de reserva.');
              });


              } else {

                Mail::send('emails/confirmacion', compact('reserva', 'cliente'), function($message) use ($gerente_sucursal_entrega){
                  $message->from('emotions@hotmail.com', 'emoTions Rent a Car');
                  $message->to($gerente_sucursal_entrega);
                  $message->subject('Detalle de reserva.');
              });

                  Mail::send('emails/confirmacion', compact('reserva', 'cliente'), function($message) use ($gerente_sucursal_devolucion){
                  $message->from('emotions@hotmail.com', 'emoTions Rent a Car');
                  $message->to($gerente_sucursal_devolucion);
                  $message->subject('Detalle de reserva.');
              });

              }


                return View::make('confirmacion',
                            compact(
                            'reserva',
                            'cliente',
                            'id'
                          ));

          }


 }


public function eliminarsesion(){
  $id = Input::get('id');

  $se = DB::table('sesion')
      ->where('reserva_id', $id)
      ->pluck('id');

  $s_d = Sesion::find($se);
  $s_d->delete();

}

	//Imprimir reserva
 public function imprimir($id){

						$reserva = DB::table('reserva')
											->where('reserva.id', $id)
											->get();

								//cliente
						$id_cliente = DB::table('reserva')
														->where('reserva.id', $id)
														->pluck('cliente_id');

            $sesion = DB::table('sesion')
                    ->where('reserva_id', $id)
                    ->get();

            if(count($sesion) == 0){
              echo "Error, la página solicitada no existe.";
            } else {

              $cliente = DB::table('cliente')
                               ->where('id', $id_cliente)
                               ->get();


             $pdf = View::make('pdfreserva',
                         compact(
                                 'reserva',
                                 'cliente'
                                 ));



                 return PDF::load($pdf, 'A4', 'portrait')
                             ->show();

            }




 }


	//Vista de reservas del admin
	 public function getReservas(){
    if(Auth::check()){
      return View::make('admin/reservas');
    } else {
        return Redirect::to('login');
    }
 }


	//Listar reservas
public function getListareservas(){
	$reservas = DB::table('reserva')
		 ->join('cliente', 'reserva.cliente_id', '=', 'cliente.id')
			->select('reserva.id', 'num_reserva', 'nombre', 'apellidos', 'dias', 'tarifa_por_dia', 'total', 'reserva.created_at')
	 	->get();

	echo json_encode($reservas);
}

//Listar reservas del dia unicamente para el dashboard
	public function getListareservasdia(){
	$date = date('Y-m-d');

	$reservas = DB::table('reserva')
			->where('fecha', $date)
		 ->join('cliente', 'reserva.cliente_id', '=', 'cliente.id')
			->select('reserva.id', 'num_reserva', 'nombre', 'apellidos', 'dias', 'tarifa_por_dia', 'total', 'reserva.created_at')
	 	->get();

	echo json_encode($reservas);
}

//Mostrar el numero de reservas del dia y el total
	public function getMostrardeldia(){
	$date = date('Y-m-d');

		$num_r = DB::table('reserva')
		->where('fecha', $date)
		->count();

		$total_r = DB::table('reserva')
			->where('fecha', $date)
			->sum('total');

	  return Response::json(
				     array(
										 'num_r' => $num_r,
											'total_r' => $total_r
									));
}

	//Detalle de la reserva
public function getDetallereserva(){
			$id = Input::get('id');

			$reserva = DB::table('reserva')
											->where('reserva.id', $id)
											->get();


					//cliente
			$id_cliente = DB::table('reserva')
											->where('reserva.id', $id)
											->pluck('cliente_id');

			$cliente = DB::table('cliente')
											->where('id', $id_cliente)
											->get();

			return Response::json(
				     array(
										 'reserva' => $reserva,
										 'cliente' => $cliente
									));
}

//exportar las reservas del dia a excel
public function getExportarlasreservasdeldia(){

	Excel::create('Reservas del día', function($excel) {
			$excel->sheet('Sheetname', function($sheet) {
		    $data=[];

	        $date = date('Y-m-d');

		    $reserva = DB::table('reserva')
	 					 ->where('fecha', $date)
						 ->join('cliente', 'reserva.cliente_id', '=', 'cliente.id')
					     ->select('reserva.id', 'num_reserva', 'lugar_entrega', 'direccion1_e','direccion2_e', 'colonia_e', 'estado_e', 'municipio_e', 'cp_e', 'referencias_e', 'telefono1_e', 'telefono2_e', 'telefono3_e', 'telefono4_e', 'fecha_entrega', 'hora_entrega', 'lugar_devolucion', 'direccion1_d','direccion2_d', 'colonia_d', 'estado_d', 'municipio_d', 'cp_d', 'referencias_d', 'telefono1_d', 'telefono2_d', 'telefono3_d', 'telefono4_d', 'fecha_devolucion', 'hora_devolucion', 'nombre', 'apellidos', 'dias', 'tarifa_por_dia', 'total', 'vehiculo', 'transmision', 'reserva.created_at', 'email', 'telefono', 'num_licencia', 'comentarios', 'diamas')
					     ->orderBy('created_at', 'desc')
					 	 ->get();

	        array_push($data, array('N° de reserva', 'Lugar de entrega', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Municipio', 'CP', 'Referencias', 'Teléfono', 'Fecha de entrega', 'Hora de entrega', 'Lugar de devolucion', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Municipio', 'CP', 'Referencias', 'Teléfono', 'Fecha de devolucion', 'Hora de devolucion', 'Tarifa por día', 'Días', 'Total', 'Vehiculo', 'Transmision', 'Fecha de registro', 'Cliente', 'Email', 'Teléfono', 'N° de Licencia', 'Comentarios'));

	    foreach ($reserva as $key => $value) {
	        	if($value->transmision == 1){

              if($value->diamas == 1){

                  array_push($data, array(
                  $value->num_reserva,
                  $value->lugar_entrega,
                  $value->direccion1_e,
                  $value->direccion2_e,
                  $value->colonia_e,
                  $value->estado_e,
                  $value->municipio_e,
                  $value->cp_e,
                  $value->referencias_e,
                  $value->telefono1_e." ".$value->telefono2_e." ".$value->telefono3_e." ".$value->telefono4_e,
                  $value->fecha_entrega,
                  $value->hora_entrega,
                  $value->lugar_devolucion,
                  $value->direccion1_d,
                  $value->direccion2_d,
                  $value->colonia_d,
                  $value->estado_d,
                  $value->municipio_d,
                  $value->cp_d,
                  $value->referencias_d,
                  $value->telefono1_d." ".$value->telefono2_d." ".$value->telefono3_d." ".$value->telefono4_d,

                  $value->fecha_devolucion,
                  $value->hora_devolucion,
                  '$ '.number_format($value->tarifa_por_dia, 2),
                  $value->dias + 1,
                  '$ '.number_format($value->total + $value->tarifa_por_dia, 2),
                  $value->vehiculo,
                  'Automático',
                  $value->created_at,
                  $value->nombre.' '.$value->apellidos,
                  $value->email,
                  $value->telefono,
                  $value->num_licencia,
                  $value->comentarios
                 ));

              } else {

                if($value->diamas == 1){

                    array_push($data, array(
                      $value->num_reserva,
                      $value->lugar_entrega,
                      $value->direccion1_e,
                      $value->direccion2_e,
                      $value->colonia_e,
                      $value->estado_e,
                      $value->municipio_e,
                      $value->cp_e,
                      $value->referencias_e,
                      $value->telefono1_e." ".$value->telefono2_e." ".$value->telefono3_e." ".$value->telefono4_e,
                      $value->fecha_entrega,
                      $value->hora_entrega,
                      $value->lugar_devolucion,
                      $value->direccion1_d,
                      $value->direccion2_d,
                      $value->colonia_d,
                      $value->estado_d,
                      $value->municipio_d,
                      $value->cp_d,
                      $value->referencias_d,
                      $value->telefono1_d." ".$value->telefono2_d." ".$value->telefono3_d." ".$value->telefono4_d,

                      $value->fecha_devolucion,
                      $value->hora_devolucion,
                      '$ '.number_format($value->tarifa_por_dia, 2),
                      $value->dias + 1,
                      '$ '.number_format($value->total + $value->tarifa_por_dia, 2),
                      $value->vehiculo,
                      'Automático',
                      $value->created_at,
                      $value->nombre.' '.$value->apellidos,
                      $value->email,
                      $value->telefono,
                      $value->num_licencia,
                      $value->comentarios
                     ));

                } else {
      					array_push($data, array(
      						$value->num_reserva,
      						$value->lugar_entrega,
                  $value->direccion1_e,
                  $value->direccion2_e,
                  $value->colonia_e,
                  $value->estado_e,
                  $value->municipio_e,
                  $value->cp_e,
                  $value->referencias_e,
                  $value->telefono1_e." ".$value->telefono2_e." ".$value->telefono3_e." ".$value->telefono4_e,
      						$value->fecha_entrega,
      						$value->hora_entrega,
      						$value->lugar_devolucion,
                  $value->direccion1_d,
                  $value->direccion2_d,
                  $value->colonia_d,
                  $value->estado_d,
                  $value->municipio_d,
                  $value->cp_d,
                  $value->referencias_d,
                  $value->telefono1_d." ".$value->telefono2_d." ".$value->telefono3_d." ".$value->telefono4_d,

      						$value->fecha_devolucion,
      						$value->hora_devolucion,
      						'$ '.number_format($value->tarifa_por_dia, 2),
      						$value->dias,
      						'$ '.number_format($value->total, 2),
      						$value->vehiculo,
      						'Automático',
      						$value->created_at,
      						$value->nombre.' '.$value->apellidos,
      						$value->email,
      						$value->telefono,
      						$value->num_licencia,
      						$value->comentarios
      					 ));
                  
                }


              } //end else


	        	 } else {

	        	 	array_push($data, array(
                $value->num_reserva,
    						$value->lugar_entrega,
                $value->direccion1_e,
                $value->direccion2_e,
                $value->colonia_e,
                $value->estado_e,
                $value->municipio_e,
                $value->cp_e,
                $value->referencias_e,
                $value->telefono1_e." ".$value->telefono2_e." ".$value->telefono3_e." ".$value->telefono4_e,
    						$value->fecha_entrega,
    						$value->hora_entrega,
    						$value->lugar_devolucion,
                $value->direccion1_d,
                $value->direccion2_d,
                $value->colonia_d,
                $value->estado_d,
                $value->municipio_d,
                $value->cp_d,
                $value->referencias_d,
                $value->telefono1_d." ".$value->telefono2_d." ".$value->telefono3_d." ".$value->telefono4_d,
    						$value->fecha_devolucion,
    						$value->hora_devolucion,
    						'$ '.number_format($value->tarifa_por_dia, 2),
    						$value->dias,
    						'$ '.number_format($value->total, 2),
    						$value->vehiculo,
    						'Estándard',
    						$value->created_at,
    						$value->nombre.' '.$value->apellidos,
    						$value->email,
    						$value->telefono,
    						$value->num_licencia,
    						$value->comentarios
    					 ));

    	       }
    	    }

			$sheet->fromArray($data, null, 'A1', false, false);

			});
		})->download('xlsx');
}


//exportar todas las reservas a excel
public function getExportartodaslasreservas(){

	Excel::create('Reservas', function($excel) {
			$excel->sheet('Sheetname', function($sheet) {
		    $data=[];

             $reserva = DB::table('reserva')
                  ->join('cliente', 'reserva.cliente_id', '=', 'cliente.id')
                    ->select('reserva.id', 'num_reserva', 'lugar_entrega', 'direccion1_e','direccion2_e', 'colonia_e', 'estado_e', 'municipio_e', 'cp_e', 'referencias_e', 'telefono1_e', 'telefono2_e', 'telefono3_e', 'telefono4_e', 'fecha_entrega', 'hora_entrega', 'lugar_devolucion', 'direccion1_d','direccion2_d', 'colonia_d', 'estado_d', 'municipio_d', 'cp_d', 'referencias_d', 'telefono1_d', 'telefono2_d', 'telefono3_d', 'telefono4_d', 'fecha_devolucion', 'hora_devolucion', 'nombre', 'apellidos', 'dias', 'tarifa_por_dia', 'total', 'vehiculo', 'transmision', 'reserva.created_at', 'email', 'telefono', 'num_licencia', 'comentarios', 'diamas')
                    ->orderBy('created_at', 'desc')
                  ->get();

	        array_push($data, array('N° de reserva', 'Lugar de entrega', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Municipio', 'CP', 'Referencias', 'Teléfono', 'Fecha de entrega', 'Hora de entrega', 'Lugar de devolucion', 'Direccion 1', 'Direccion 2', 'Colonia', 'Estado', 'Municipio', 'CP', 'Referencias', 'Teléfono', 'Fecha de devolucion', 'Hora de devolucion', 'Tarifa por día', 'Días', 'Total', 'Vehiculo', 'Transmision', 'Fecha de registro', 'Cliente', 'Email', 'Teléfono', 'N° de Licencia', 'Comentarios'));

          foreach ($reserva as $key => $value) {
    	        	if($value->transmision == 1){

                  if($value->diamas == 1){

                      array_push($data, array(
                        $value->num_reserva,
                        $value->lugar_entrega,
                        $value->direccion1_e,
                        $value->direccion2_e,
                        $value->colonia_e,
                        $value->estado_e,
                        $value->municipio_e,
                        $value->cp_e,
                        $value->referencias_e,
                        $value->telefono1_e." ".$value->telefono2_e." ".$value->telefono3_e." ".$value->telefono4_e,
                        $value->fecha_entrega,
                        $value->hora_entrega,
                        $value->lugar_devolucion,
                        $value->direccion1_d,
                        $value->direccion2_d,
                        $value->colonia_d,
                        $value->estado_d,
                        $value->municipio_d,
                        $value->cp_d,
                        $value->referencias_d,
                        $value->telefono1_d." ".$value->telefono2_d." ".$value->telefono3_d." ".$value->telefono4_d,

                        $value->fecha_devolucion,
                        $value->hora_devolucion,
                        '$ '.number_format($value->tarifa_por_dia, 2),
                        $value->dias + 1,
                        '$ '.number_format($value->total + $value->tarifa_por_dia, 2),
                        $value->vehiculo,
                        'Automático',
                        $value->created_at,
                        $value->nombre.' '.$value->apellidos,
                        $value->email,
                        $value->telefono,
                        $value->num_licencia,
                        $value->comentarios
                       ));

                  } else {

          					array_push($data, array(
          						$value->num_reserva,
          						$value->lugar_entrega,
                      $value->direccion1_e,
                      $value->direccion2_e,
                      $value->colonia_e,
                      $value->estado_e,
                      $value->municipio_e,
                      $value->cp_e,
                      $value->referencias_e,
                      $value->telefono1_e." ".$value->telefono2_e." ".$value->telefono3_e." ".$value->telefono4_e,
          						$value->fecha_entrega,
          						$value->hora_entrega,
          						$value->lugar_devolucion,
                      $value->direccion1_d,
                      $value->direccion2_d,
                      $value->colonia_d,
                      $value->estado_d,
                      $value->municipio_d,
                      $value->cp_d,
                      $value->referencias_d,
                      $value->telefono1_d." ".$value->telefono2_d." ".$value->telefono3_d." ".$value->telefono4_d,

          						$value->fecha_devolucion,
          						$value->hora_devolucion,
          						'$ '.number_format($value->tarifa_por_dia, 2),
          						$value->dias,
          						'$ '.number_format($value->total, 2),
          						$value->vehiculo,
          						'Automático',
          						$value->created_at,
          						$value->nombre.' '.$value->apellidos,
          						$value->email,
          						$value->telefono,
          						$value->num_licencia,
          						$value->comentarios
          					 ));
                  }


    	        	 } else {

                    if($value->diamas == 1){

                      array_push($data, array(
                        $value->num_reserva,
                        $value->lugar_entrega,
                        $value->direccion1_e,
                        $value->direccion2_e,
                        $value->colonia_e,
                        $value->estado_e,
                        $value->municipio_e,
                        $value->cp_e,
                        $value->referencias_e,
                        $value->telefono1_e." ".$value->telefono2_e." ".$value->telefono3_e." ".$value->telefono4_e,
                        $value->fecha_entrega,
                        $value->hora_entrega,
                        $value->lugar_devolucion,
                        $value->direccion1_d,
                        $value->direccion2_d,
                        $value->colonia_d,
                        $value->estado_d,
                        $value->municipio_d,
                        $value->cp_d,
                        $value->referencias_d,
                        $value->telefono1_d." ".$value->telefono2_d." ".$value->telefono3_d." ".$value->telefono4_d,
                        $value->fecha_devolucion,
                        $value->hora_devolucion,
                        '$ '.number_format($value->tarifa_por_dia, 2),
                        $value->dias + 1,
                        '$ '.number_format($value->total + $value->tarifa_por_dia, 2),
                        $value->vehiculo,
                        'Estándard',
                        $value->created_at,
                        $value->nombre.' '.$value->apellidos,
                        $value->email,
                        $value->telefono,
                        $value->num_licencia,
                        $value->comentarios
                       ));

                    } else {

        	        	 	array_push($data, array(
                        $value->num_reserva,
            						$value->lugar_entrega,
                        $value->direccion1_e,
                        $value->direccion2_e,
                        $value->colonia_e,
                        $value->estado_e,
                        $value->municipio_e,
                        $value->cp_e,
                        $value->referencias_e,
                        $value->telefono1_e." ".$value->telefono2_e." ".$value->telefono3_e." ".$value->telefono4_e,
            						$value->fecha_entrega,
            						$value->hora_entrega,
            						$value->lugar_devolucion,
                        $value->direccion1_d,
                        $value->direccion2_d,
                        $value->colonia_d,
                        $value->estado_d,
                        $value->municipio_d,
                        $value->cp_d,
                        $value->referencias_d,
                        $value->telefono1_d." ".$value->telefono2_d." ".$value->telefono3_d." ".$value->telefono4_d,
            						$value->fecha_devolucion,
            						$value->hora_devolucion,
            						'$ '.number_format($value->tarifa_por_dia, 2),
            						$value->dias,
            						'$ '.number_format($value->total, 2),
            						$value->vehiculo,
            						'Estándard',
            						$value->created_at,
            						$value->nombre.' '.$value->apellidos,
            						$value->email,
            						$value->telefono,
            						$value->num_licencia,
            						$value->comentarios
            					 ));
                      
                    }


        	       }
        	    }

			$sheet->fromArray($data, null, 'A1', false, false);

			});
		})->download('xlsx');
}



/*******
Configurar Tarifas-------
******************************************/
 public function getConfig(){
    if(Auth::check()){
      return View::make('admin/config');
    } else {
        return Redirect::to('login');
    }
 }



//Listar tarifas
public function getListatarifas(){
	$tarifas = DB::table('tarifa')
		 ->join('oficina', 'tarifa.oficina_id', '=', 'oficina.id')
			->select('tarifa.id', 'nombre_oficina', 'fecha_inicio', 'fecha_fin', 'estatus')
	 	->get();

	echo json_encode($tarifas);
}

	//Listar oficinas
public function getSelectoficinas(){
	$oficinas = DB::table('oficina')
			->select('id', 'nombre_oficina')
	 	->get();

	return Response::json(array('oficinas' => $oficinas));
}

	//Listar grupos
public function getSelectgrupos(){
	$grupos = DB::table('grupo')
			->select('id', 'descripcion_grupo')
		 ->where('estatus', '1')
	 	->get();

	return Response::json(array('grupos' => $grupos));
}

	//Listar codigos
public function getSelectcodigos(){
	$codigos = DB::table('codigo')
			->select('id', 'codigo', 'descripcion_codigo')
			->where('estatus', '1')
	 	->get();

	return Response::json(array('codigos' => $codigos));
}

	//Listar coberturas
public function getSelectcoberturas(){
	$coberturas = DB::table('cobertura')
			->select('id', 'cobertura')
		 ->where('estatus', '1')
	 	->get();

	return Response::json(array('coberturas' => $coberturas));
}

	//Listar los vehiculos
public function getSelectvehiculos(){
	$vehiculos = DB::table('tipo_vehiculo')
			->select('id', 'descripcion', 'transmision')
		 ->where('estatus', '1')
	 	->get();

	return Response::json(array('vehiculos' => $vehiculos));
}


//Listar los vehiculos del respectivo codigo
public function getListarvehiculoscodigo(){
  $id = Input::get('id');

  if($id == 0){
    $s = 'vacio';
    return Response::json(array(
           's' => $s
           ));
  } else {

      $vehiculos = DB::table('tipo_vehiculo')
      ->select('id', 'descripcion', 'transmision')
      ->where('estatus', '1')
      ->where('codigo_id', $id)
      ->get();

      if(count($vehiculos) == 0){

        $s = 'nohay';

     return Response::json(array(
           's' => $s
           ));

      } else {
        $s = 'hay';

     return Response::json(array(
           'vehiculos' => $vehiculos,
           's' => $s
           ));
      }


  }


}



//Agregar tarifa
public function postAgregartarifa(){
	$id_oficina = Input::get('id_oficina');
	$fecha_inicio = Input::get('fecha_inicio');
	$fecha_fin = Input::get('fecha_fin');
	$activo = Input::get('activo');

		//registramos
		$new_t = new Tarifa;
		$new_t->oficina_id = $id_oficina;
		$new_t->fecha_inicio = $fecha_inicio;
		$new_t->fecha_fin = $fecha_fin;
		$new_t->estatus = $activo;
		$new_t->save();


	$n_t = DB::table('tarifa')
	 ->join('oficina', 'tarifa.oficina_id', '=', 'oficina.id')
			->select('tarifa.id', 'nombre_oficina', 'fecha_inicio', 'fecha_fin', 'estatus')
		 ->where('tarifa.id', $new_t['id'])
	 	->first();

		return Response::json($n_t);

  
}

//Agregar tarifa detalle
public function postAgregartarifadetalle(){
		$datos = json_decode(Input::get('aInfo'));

		for ($i=0; $i < count($datos); $i++) {

			$tarifa_d = new TarifaDetalle;
			$tarifa_d->tarifa_id = $datos[$i]->id_tarifa;
			$tarifa_d->grupo_id = $datos[$i]->id_g;
      $tarifa_d->codigo_id = $datos[$i]->id_codigo;
			$tarifa_d->cobertura_id = $datos[$i]->id_cobertura;
			$tarifa_d->tipo_vehiculo_id = $datos[$i]->id_v;
		  $tarifa_d->tarifa_por_dia = $datos[$i]->tarifa_por_dia;
      $tarifa_d->estatus = $datos[$i]->estatus;
			$tarifa_d->save();

		}



}


//Eliminar tarifa
public function getEliminartarifa(){
	 $id = Input::get('id');

	//Comprobamos si la tarifa tiene detalle
	$t_d = DB::table('tarifa_detalle')
							->where('tarifa_id', $id)
							->get();

	if(count($t_d) == 0){


	//Eliminamos la tarifa
	$t = Tarifa::find($id);
	$t->delete();

		return Response::json($id);

	} else {


	//obtenemos el numero total de detalles que tiene esa tarifa
	$t_n = DB::table('tarifa_detalle')
							->where('tarifa_id', $id)
							->count();

		for ($i=0; $i < $t_n; $i++) {

			$t_a = DB::table('tarifa_detalle')
							->where('tarifa_id', $id)
							->orderBy('created_at')
							->pluck('id');


				//Eliminamos el detalle
				$t = TarifaDetalle::find($t_a);
				$t->delete();


		}

	//Eliminamos la tarifa
	$t = Tarifa::find($id);
	$t->delete();

		return Response::json($id);

	}



}


	//Editar tarifa
public function getEditartarifa(){
	$id = Input::get('id');

	$tarifa = DB::table('tarifa')
								->where('id', $id)
								->first();

	return Response::json($tarifa);

}


//Listar oficinas para editar
public function getSelectoficinasedit(){
	$id = Input::get('id');

	//obtenemos el id de la oficina
	$o = DB::table('tarifa')
						->where('id', $id)
						->pluck('oficina_id');

	//Listamos las oficinas
	$oficinas = DB::table('oficina')
			->select('id', 'nombre_oficina')
			->where('id', '!=', $o)
	 	->get();

	//lISTAMOS la oficina actual
	$o_a = DB::table('oficina')
			->select('id', 'nombre_oficina')
			->where('id', '=', $o)
	 	->get();

	return Response::json(array(
		  'oficinas' => $oficinas,
				'o_a' => $o_a
	 ));
}


//Listar los detalles de la tarifa
public function getListartarifadetalleedit(){
	$id = Input::get('id');


	$t_d = DB::table('tarifa_detalle')
		 ->join('grupo', 'tarifa_detalle.grupo_id', '=', 'grupo.id')
     ->join('codigo', 'tarifa_detalle.codigo_id', '=', 'codigo.id')
		 ->join('cobertura', 'tarifa_detalle.cobertura_id', '=', 'cobertura.id')
		 ->join('tipo_vehiculo', 'tarifa_detalle.tipo_vehiculo_id', '=', 'tipo_vehiculo.id')
			->select('tarifa_detalle.id', 'descripcion_grupo', 'cobertura', 'tipo_vehiculo.descripcion', 'tarifa_por_dia', 'tarifa_detalle.estatus', 'transmision', 'codigo', 'descripcion_codigo', 'tipo_vehiculo.codigo_id')
			->where('tarifa_detalle.tarifa_id', '=', $id)
	 	->get();


	return Response::json(array(
		  't_d' => $t_d,
	 ));
}


//Eliminar detalle de la tarifa
public function getElimartarifadetalle(){
	 $id = Input::get('id');

	 $t_d = TarifaDetalle::find($id);
	 $t_d->delete();

}

//Listar grupos para editar
public function getSelectgruposedit(){
	$id = Input::get('id');

	//obtenemos el id del grupo
	$x = DB::table('tarifa_detalle')
						->where('id', $id)
						->pluck('grupo_id');

	//Listamos loa grupos
	$grupos = DB::table('grupo')
			->select('id', 'descripcion_grupo')
			->where('id', '!=', $x)
	 	->get();

	//lISTAMOS el grupo actual
	$x_a = DB::table('grupo')
			->select('id', 'descripcion_grupo')
			->where('id', '=', $x)
	 	->get();

	return Response::json(array(
		  'grupos' => $grupos,
				'x_a' => $x_a
	 ));
}

//Listar los detalles al editar tarifa_detalle
public function getSelectgruposeditdetalle(){
	$id = Input::get('id');

	//obtenemos el id del grupo
	$x = DB::table('tarifa_detalle')
						->where('id', $id)
						->pluck('grupo_id');

	//Listamos loa grupos
	$grupos = DB::table('grupo')
			->select('id', 'descripcion_grupo')
			->where('id', '!=', $x)
      ->where('estatus', 1)
	 	  ->get();

	//lISTAMOS el grupo actual
	$x_a = DB::table('grupo')
			->select('id', 'descripcion_grupo')
			->where('id', '=', $x)
	 	->get();

	return Response::json(array(
		  'grupos' => $grupos,
				'x_a' => $x_a
	 ));
}

public function getSelectcodigoseditdetalle(){
	$id = Input::get('id');

	$x = DB::table('tarifa_detalle')
						->where('id', $id)
						->pluck('codigo_id');

	$codigos = DB::table('codigo')
			->select('id', 'codigo', 'descripcion_codigo')
			->where('id', '!=', $x)
			->where('estatus', '1')
	 	->get();

	$x_a = DB::table('codigo')
			->select('id', 'codigo', 'descripcion_codigo')
			->where('id', '=', $x)
	 	->get();

	return Response::json(array(
		  'codigos' => $codigos,
				'x_a' => $x_a
	 ));
}

public function getSelectcoberturaseditdetalle(){
	$id = Input::get('id');

	$x = DB::table('tarifa_detalle')
						->where('id', $id)
						->pluck('cobertura_id');

	$coberturas = DB::table('cobertura')
			->select('id', 'cobertura')
			->where('id', '!=', $x)
		 ->where('estatus', '1')
	 	->get();

	$x_a = DB::table('cobertura')
			->select('id', 'cobertura')
			->where('id', '=', $x)
	 	->get();

	return Response::json(array(
		  'coberturas' => $coberturas,
				'x_a' => $x_a
	 ));
}

public function getSelectvehiculoseditdetalle(){
	$id = Input::get('id');
  $id_vehiculo = Input::get('id_vehiculo');

	$x = DB::table('tarifa_detalle')
						->where('id', $id)
						->pluck('tipo_vehiculo_id');

	$vehiculos = DB::table('tipo_vehiculo')
			->select('id', 'descripcion', 'transmision')
			->where('id', '!=', $x)
      ->where('codigo_id', '=', $id_vehiculo)
		  ->where('estatus', '1')
	 	  ->get();

	$x_a = DB::table('tipo_vehiculo')
			->select('id', 'descripcion', 'transmision')
			->where('id', '=', $x)
	   	->get();

	//Listamos la tarifa
	$tarifa = DB::table('tarifa_detalle')
						->select('tarifa_por_dia', 'estatus')
						->where('id', $id)
						->first();

	return Response::json(array(
		  'vehiculos' => $vehiculos,
				'x_a' => $x_a,
		  'tarifa' => $tarifa
	 ));
}


	//Agregar nuevo detalle al edira tarifa
public function getAgregartarifadetalle(){
	$id_tarifa = Input::get('id_tarifa');
	$grupo = Input::get('grupo');
  $codigo = Input::get('codigo');
	$cobertura = Input::get('cobertura');
	$vehiculo = Input::get('vehiculo');
	$tarifa_por_dia = Input::get('tarifa_por_dia');
  $estatus = Input::get('activo');

	$t = new TarifaDetalle;
	$t->tarifa_id = $id_tarifa;
	$t->grupo_id = $grupo;
  $t->codigo_id = $codigo;
	$t->cobertura_id = $cobertura;
	$t->tipo_vehiculo_id = $vehiculo;
	$t->tarifa_por_dia = $tarifa_por_dia;
  $t->estatus = $estatus;
	$t->save();

	//retornamos
	$t_n = DB::table('tarifa_detalle')
			->join('grupo', 'tarifa_detalle.grupo_id', '=', 'grupo.id')
      ->join('codigo', 'tarifa_detalle.codigo_id', '=', 'codigo.id')
			->join('cobertura', 'tarifa_detalle.cobertura_id', '=', 'cobertura.id')
			->join('tipo_vehiculo', 'tarifa_detalle.tipo_vehiculo_id', '=', 'tipo_vehiculo.id')
			->select('tarifa_detalle.id', 'descripcion_grupo', 'cobertura', 'tipo_vehiculo.descripcion', 'tarifa_por_dia', 'tarifa_detalle.estatus', 'transmision', 'codigo', 'descripcion_codigo', 'tipo_vehiculo.codigo_id')
			->where('tarifa_detalle.id', $t['id'])
			->first();

	 return Response::json($t_n);

}


	//Actualizar tarifa detalle
public function getActualizardetalle(){
	$id = Input::get('id');
	$id_tarifa = Input::get('id_tarifa');
	$grupo = Input::get('grupo');
  $codigo = Input::get('codigo');
	$cobertura = Input::get('cobertura');
	$vehiculo = Input::get('vehiculo');
	$tarifa_por_dia = Input::get('tarifa_por_dia');
  $estatus = Input::get('activo');

	$t = TarifaDetalle::find($id);
	$t->tarifa_id = $id_tarifa;
	$t->grupo_id = $grupo;
  $t->codigo_id = $codigo;
	$t->cobertura_id = $cobertura;
	$t->tipo_vehiculo_id = $vehiculo;
	$t->tarifa_por_dia = $tarifa_por_dia;
    $t->estatus = $estatus;
	$t->save();

	//retornamos
	$t_n = DB::table('tarifa_detalle')
				->join('grupo', 'tarifa_detalle.grupo_id', '=', 'grupo.id')
        ->join('codigo', 'tarifa_detalle.codigo_id', '=', 'codigo.id')
				->join('cobertura', 'tarifa_detalle.cobertura_id', '=', 'cobertura.id')
				->join('tipo_vehiculo', 'tarifa_detalle.tipo_vehiculo_id', '=', 'tipo_vehiculo.id')
				->select('tarifa_detalle.id', 'descripcion_grupo', 'cobertura', 'tipo_vehiculo.descripcion', 'tarifa_por_dia', 'tarifa_detalle.estatus', 'transmision', 'descripcion_codigo', 'codigo', 'tipo_vehiculo.codigo_id')
				->where('tarifa_detalle.id', $id)
				->first();

	return Response::json($t_n);

}

	//Actualizar tarifa
public function getActualizartarifa(){
	$id = Input::get('id');
	$oficina = Input::get('oficina');
	$fehca_inicio = Input::get('fehca_inicio');
	$fecha_fin = Input::get('fecha_fin');
	$estatus = Input::get('estatus');

	$t = Tarifa::find($id);
	$t->oficina_id = $oficina;
	$t->fecha_inicio = $fehca_inicio;
	$t->fecha_fin = $fecha_fin;
	$t->estatus = $estatus;
	$t->save();

	//retornamos
	$t_n = DB::table('tarifa')
							 ->join('oficina', 'tarifa.oficina_id', '=', 'oficina.id')
								->select('tarifa.id', 'nombre_oficina', 'fecha_inicio', 'fecha_fin', 'estatus')
								->where('tarifa.id', $id)
								->first();

	return Response::json($t_n);

}

//obtener datos para duplicar tarifa
public function getObtenerdatostarifa(){
  $id = Input::get('id');
  
  //obtenemos los datos de la tarifa
  $tarifa = DB::table('tarifa')
        ->where('id', $id)
        ->first();

  //obtenemos los datos de la tarifa detalle
  $tarifa_detalle = DB::table('tarifa_detalle')
        ->where('tarifa_id', $id)
        ->get();

  $numero_tarifa_detalle = DB::table('tarifa_detalle')
        ->where('tarifa_id', $id)
        ->count();


  //registramos la tarifa
    $new_t = new Tarifa;
    $new_t->oficina_id = $tarifa->oficina_id;
    $new_t->fecha_inicio = $tarifa->fecha_inicio;
    $new_t->fecha_fin = $tarifa->fecha_fin;
    $new_t->estatus = $tarifa->estatus;
    $new_t->save();


    $id_tarifa = $new_t['id'];

  return Response::json(array(
                   'id_tarifa' => $id_tarifa,
                   'numero_tarifa_detalle' => $numero_tarifa_detalle,
                   'tarifa_detalle' => $tarifa_detalle
                   ));
 

}


//Agregar tarifa detalle
public function postDuplicartarifadetalle(){
    
  $tarifa_id = Input::get('tarifa_id');
  $grupo_id = Input::get('grupo_id');
  $codigo_id = Input::get('codigo_id');
  $cobertura_id = Input::get('cobertura_id');
  $tipo_vehiculo_id = Input::get('tipo_vehiculo_id');
  $tarifa_por_dia = Input::get('tarifa_por_dia');
  $estatus = Input::get('estatus');
   

  $tarifa_d = new TarifaDetalle;
  $tarifa_d->tarifa_id = $tarifa_id;
  $tarifa_d->grupo_id = $grupo_id;
  $tarifa_d->codigo_id = $codigo_id;
  $tarifa_d->cobertura_id = $cobertura_id;
  $tarifa_d->tipo_vehiculo_id = $tipo_vehiculo_id;
  $tarifa_d->tarifa_por_dia = $tarifa_por_dia;
  $tarifa_d->estatus = $estatus;
  $tarifa_d->save();

    

}


//Listar oficinas para duplicar
public function getSelectoficinaseditduplicar(){
  $id = Input::get('id');


  //Listamos las oficinas
  $oficinas = DB::table('oficina')
      ->select('id', 'nombre_oficina')
       ->get();


  return Response::json(array(
      'oficinas' => $oficinas
   ));
}


//retornar la nueva tarifa duplicada
public function getAgregarnuevatarifaduplicada(){

  $id = Input::get('id');
  $oficina = Input::get('oficina');
  $fehca_inicio = Input::get('fehca_inicio');
  $fecha_fin = Input::get('fecha_fin');
  $estatus = Input::get('estatus');

  $t = Tarifa::find($id);
  $t->oficina_id = $oficina;
  $t->fecha_inicio = $fehca_inicio;
  $t->fecha_fin = $fecha_fin;
  $t->estatus = $estatus;
  $t->save();

  //retornamos
    $tarifa =DB::table('tarifa')
   ->join('oficina', 'tarifa.oficina_id', '=', 'oficina.id')
      ->select('tarifa.id', 'nombre_oficina', 'fecha_inicio', 'fecha_fin', 'estatus')
     ->where('tarifa.id', $id)
    ->first();


  return Response::json($tarifa);



}



/*******
Catalogo sucursales-------
******************************************/
 public function getSucursal(){
    if(Auth::check()){
      return View::make('admin/sucursal');
    } else {
        return Redirect::to('login');
    }
 }

//Listar sucursales
public function getListarsucursales(){
	$sucursal = DB::table('sucursal')
		 ->join('gerente', 'sucursal.gerente_id', '=', 'gerente.id')
		 ->join('oficina', 'sucursal.oficina_id', '=', 'oficina.id')
			->select('sucursal.id', 'nombre_sucursal', 'sucursal.created_at', 'nombre', 'paterno', 'nombre_oficina','direccion1', 'direccion2', 'colonia', 'estado', 'municipio_delegacion', 'referencia', 'cp')
	 	->get();

	echo json_encode($sucursal);
}



//Listar gerentes
public function getSelectgerentes(){
	$gerente = DB::table('gerente')
			->select('id', 'nombre', 'paterno')
	 	->get();

	return Response::json(array('gerente' => $gerente));
}

//Listar oficinas
public function getSelectnuevaoficina(){
	$plazas = DB::table('oficina')
			->select('id', 'nombre_oficina')
			//->where('estatus', '1')
	 	->get();

	return Response::json(array('plazas' => $plazas));
}

//Listar plazas
public function getSelectplazas(){
  $plazas = DB::table('plaza')
      ->select('id', 'nombre_plaza')
      ->where('estatus', '1')
      ->get();

  return Response::json(array('plazas' => $plazas));
}

	//Listar los tipos de teléfonos
	public function getSelectelefonos(){
	$tel = DB::table('tipo_tel')
			->select('id', 'nombre')
			->where('estatus', '1')
	 	->get();

	return Response::json(array('tel' => $tel));
}

	//Agregar sucursal
public function postAgregarsucursal(){
	$sucursal = Input::get('sucursal');
	$gerente = Input::get('select_gerente');
	$plaza = Input::get('select_plaza');
	$direccion1 = Input::get('direccion1');
	$direccion2 = Input::get('direccion2');
	$colonia = Input::get('colonia');
	$estado = Input::get('estado');
	$municipio = Input::get('municipio');
	$cp = Input::get('cp');
	$referencia = Input::get('referencia');


		//registramos
		$new_s = new Sucursal;
		$new_s->gerente_id = $gerente;
		$new_s->oficina_id = $plaza;
		$new_s->nombre_sucursal = $sucursal;
		$new_s->direccion1 = $direccion1;
		$new_s->direccion2 = $direccion2;
		$new_s->colonia = $colonia;
  	$new_s->estado = $estado;
		$new_s->municipio_delegacion = $municipio;
		$new_s->cp = $cp;
		$new_s->referencia = $referencia;
		$new_s->save();


	$n_s = DB::table('sucursal')
				->join('gerente', 'sucursal.gerente_id', '=', 'gerente.id')
		    ->join('oficina', 'sucursal.oficina_id', '=', 'oficina.id')
			  ->select('sucursal.id', 'nombre_sucursal', 'sucursal.created_at', 'nombre', 'paterno', 'nombre_oficina','direccion1', 'direccion2', 'colonia', 'estado', 'municipio_delegacion', 'referencia', 'cp')
		    ->where('sucursal.id', $new_s['id'])
		  	->first();

		return Response::json($n_s);


}


	//Agregar los telefonos de la sucursal
	public function postAgregartelefonosucursal(){
		$datos = json_decode(Input::get('aInfo'));
		$id = Input::get('id');

		for ($i=0; $i < count($datos); $i++) {

				$tel_sucursal = new TelefonoSucursal;
				$tel_sucursal->sucursal_id = $datos[$i]->id_s;
				$tel_sucursal->tipo_tel_id = $datos[$i]->id_t;
				$tel_sucursal->numero = $datos[$i]->numero;
				$tel_sucursal->save();

		}


		$n_t = DB::table('sucursal')
		    ->where('id', $id)
						->get();

		return Response::json(array(
			     'n_t' => $n_t
		  ));
	}

	//Actualizar los telefonos de la sucursal
	public function postActualizartelefonosucursal(){
		$datos = json_decode(Input::get('aInfo'));
		$id = Input::get('id');

		for ($i=0; $i < count($datos); $i++) {

				$tel_sucursal = TelefonoSucursal::find($datos[$i]->id_t_s);
				$tel_sucursal->sucursal_id = $datos[$i]->id_s;
				$tel_sucursal->tipo_tel_id = $datos[$i]->id_n;
				$tel_sucursal->numero = $datos[$i]->numero;
				$tel_sucursal->save();

		}


		$n_t = DB::table('sucursal')
		    ->where('id', $id)
						->get();

		return Response::json(array(
			     'n_t' => $n_t
		  ));
	}


//Eliminar sucursal
public function getEliminarsucursal(){
	 $id = Input::get('id');

	//Comprobamos si la sucursal tiene telefono
	$t_s = DB::table('telefono_sucursal')
							->where('sucursal_id', $id)
							->get();

	if(count($t_s) == 0){


	//Eliminamos la sucursal
	$d_g = Sucursal::find($id);
	$d_g->delete();

		return Response::json($id);

	} else {


	//obtenemos el numero total de telefonos con esa sucursal
	$tel_n = DB::table('telefono_sucursal')
							->where('sucursal_id', $id)
							->count();

		for ($i=0; $i < $tel_n; $i++) {

			$t_a = DB::table('telefono_sucursal')
							->where('sucursal_id', $id)
							->orderBy('created_at')
							->first();

					//Obtenemos el id de el telefono de la sucursal
	$tel_s = DB::table('telefono_sucursal')
							->where('sucursal_id', $id)
		     ->orderBy('created_at')
							->pluck('id');

				//Eliminamos el telefono
				$t = TelefonoSucursal::find($tel_s);
				$t->delete();


		}

	//Eliminamos la sucursal
	$d_g = Sucursal::find($id);
	$d_g->delete();

		return Response::json($id);

	}



}


	//Editar sucursal
public function getEditarasucursal(){
	$id = Input::get('id');

	$sucursal = DB::table('sucursal')
								->where('id', $id)
								->first();

	return Response::json($sucursal);

}

  //Agregar oficina
public function postAgregarnuevaoficinasucursal(){
  $nombre = Input::get('nombre');
  $plaza = Input::get('plaza');
  $clave = Input::get('clave');

   $n_p = new Oficina;
   $n_p->plaza_id = $plaza;
   $n_p->nombre_oficina = $nombre;
   $n_p->clave = $clave;
   $n_p->save();

    $plaza = DB::table('oficina')
                ->where('id', $n_p['id'])
                ->first();

    return Response::json($plaza);



}



//Listar gerentes para editar
public function getSelecteditgerentes(){
	$id_s = Input::get('id');

	//obtenemos el id del agente
	$s = DB::table('sucursal')
						->where('id', $id_s)
						->pluck('gerente_id');

	//Listamos gerentes
	$gerente = DB::table('gerente')
			->select('id', 'nombre', 'paterno')
			->where('id', '!=', $s)
	 	->get();

	//lISTAMOS Al gerente actual
	$g_a = DB::table('gerente')
			->select('id', 'nombre', 'paterno')
			->where('id', '=', $s)
	 	->get();

	return Response::json(array(
		  'gerente' => $gerente,
				'g_a' => $g_a
	 ));
}

//Listar telefonos para editar
public function getListarteleditar(){
	$id_s = Input::get('id');


	//Listamos telefonos
	$t_s = DB::table('telefono_sucursal')
			->join('sucursal', 'telefono_sucursal.sucursal_id', '=', 'sucursal.id')
			->where('sucursal_id', '=', $id_s)
			->select('numero', 'telefono_sucursal.id', 'tipo_tel_id')
	 	->get();


	return Response::json(array(
		  't_s' => $t_s
	 ));
}

public function getListartelselectedit(){
	 $id_t = Input::get('id');


	//Listamos los tipos de telefonos
	$tel = DB::table('tipo_tel')
			->select('id', 'nombre')
		 ->where('id', '!=', $id_t)
		 ->where('estatus', '1')
	 	->get();

	//lISTAMOS el telefono actual
	$tel_a = DB::table('tipo_tel')
			->select('id', 'nombre')
		 ->where('id', '=', $id_t)
	 	->get();

	return Response::json(array(
		 'tel' => $tel,
		 'tel_a' => $tel_a
	 ));

}

//Eliminar telefono al editar sucursal
public function getElimarteledit(){
	 $id = Input::get('id');

	 $t_s = TelefonoSucursal::find($id);
	 $t_s->delete();

}


//Listar oficinas para editar
public function getSelecteditplazas(){
	$id_s = Input::get('id');

	//obtenemos el id de la plaza
	$p = DB::table('sucursal')
						->where('id', $id_s)
						->pluck('oficina_id');

	//Listamos las oficinas
	$plazas = DB::table('oficina')
		 ->select('id', 'nombre_oficina')
		 ->where('id', '!=', $p)
	 	 ->get();

	//lISTAMOS la oficina actual
	$p_a = DB::table('oficina')
			 ->select('id', 'nombre_oficina')
			 ->where('id', '=', $p)
	  	 ->get();

	return Response::json(array(
		 'plazas' => $plazas,
		 'p_a' => $p_a
	 ));
}


//Actualizar sucursal-------
public function getActualizarsucursal(){

	$id = Input::get('id');
	$sucursal = Input::get('sucursal');
	$gerente = Input::get('select_gerente');
	$plaza = Input::get('select_plaza');
	$direccion1 = Input::get('direccion1');
	$direccion2 = Input::get('direccion2');
	$colonia = Input::get('colonia');
	$estado = Input::get('estado');
	$municipio = Input::get('municipio');
	$cp = Input::get('cp');
	$referencia = Input::get('referencia');


		//actualizamos
		$new_s = Sucursal::find($id);
		$new_s->gerente_id = $gerente;
		$new_s->oficina_id = $plaza;
		$new_s->nombre_sucursal = $sucursal;
		$new_s->direccion1 = $direccion1;
		$new_s->direccion2 = $direccion2;
		$new_s->colonia = $colonia;
		$new_s->estado = $estado;
		$new_s->municipio_delegacion = $municipio;
		$new_s->cp = $cp;
		$new_s->referencia = $referencia;
		$new_s->save();

		$n_s = DB::table('sucursal')
			->join('gerente', 'sucursal.gerente_id', '=', 'gerente.id')
		 ->join('oficina', 'sucursal.oficina_id', '=', 'oficina.id')
			->select('sucursal.id', 'nombre_sucursal', 'sucursal.created_at', 'nombre', 'paterno', 'nombre_oficina','direccion1', 'direccion2', 'colonia', 'estado', 'municipio_delegacion', 'referencia', 'cp')
		 ->where('sucursal.id', $id)
			->first();

		return Response::json($n_s);



}



/*******
Catalogo Teléfonos-------
******************************************/
public function getTelefonos(){
    if(Auth::check()){
      return View::make('admin/telefonos');
    } else {
        return Redirect::to('login');
    }
 }


	//Listar telefonos
public function getListatelefonos(){
	$telefonos = DB::table('tipo_tel')
	 	->get();

	echo json_encode($telefonos);
}


		//Agregar telefono
public function postAgregartelefono(){
	$nombre = Input::get('nombre');
	$activo = Input::get('activo');

	 $n_t = new TipoTel;
		$n_t->nombre = $nombre;
	 $n_t->estatus = $activo;
	 $n_t->save();

		$tel = DB::table('tipo_tel')
								->where('nombre', $nombre)
								->where('estatus', $activo)
								->first();

		return Response::json($tel);


}

//Eliminar teléfono
public function getEliminartelefono(){
	$id = Input::get('id');

	//comprobamos que el telefono no este en uso
	$tel = DB::table('telefono_sucursal')
									->where('tipo_tel_id', $id)
									->get();


	if(count($tel) == 0){
					//Eliminamos
					$d_t = TipoTel::find($id);
					$d_t->delete();

					return Response::json($id);

	} else {
		 $p = "Existe";
			$telefono = DB::table('tipo_tel')
			       ->where('id', $id)
										->select('nombre')
										->first();

		 return Response::json(array(
					   'p' => $p,
				    'telefono' => $telefono
			));
	}


}


	//Editar teléfono
public function getEditartelefono(){
	$id = Input::get('id');

	$t = DB::table('tipo_tel')
								->where('id', $id)
								->first();

	return Response::json($t);

}


	//Actualizar vehiculo
public function getActualizartelefono(){
	$id = Input::get('id');
	$nombre = Input::get('nombre');
	$estatus = Input::get('estatus');


		//actualizamos
		$new_t = TipoTel::find($id);
		$new_t->nombre = $nombre;
		$new_t->estatus = $estatus;
		$new_t->save();

		$n_t = DB::table('tipo_tel')
			->where('id', $id)
			->first();

		return Response::json($n_t);



}




/*******
Catalogo gerentes-------
******************************************/
public function getGerentes(){
    if(Auth::check()){
      return View::make('admin/gerentes');
    } else {
        return Redirect::to('login');
    }
 }

//Listar gerentes
public function getListagerentes(){
	$sucursal = DB::table('gerente')
	 	->get();

	echo json_encode($sucursal);
}


	//Agregar gerente
public function postAgregargerente(){
	$nombre = Input::get('nombre');
	$paterno = Input::get('paterno');
	$materno = Input::get('materno');
	$email = Input::get('email');

	//verificamos que no exista el email
	$g = DB::table('gerente')
						->where('email', $email)
						->get();

	if(count($g)){
		$e = "Existe";
		return Response::json($e);
	} else {


		//registramos
		$new_g = new Gerente;
		$new_g->nombre = $nombre;
		$new_g->paterno = $paterno;
		$new_g->materno = $materno;
		$new_g->email = $email;
		$new_g->save();

		$n_g = DB::table('gerente')
				->where('nombre', $nombre)
			 ->where('email', $email)
			->first();

		return Response::json($n_g);

	}


}


//Eliminar gerente
public function getEliminargerente(){
	$id = Input::get('id');

	//comprobamos que el agente no este en uso
	$sucursal = DB::table('sucursal')
									->where('gerente_id', $id)
									->get();

	if(count($sucursal) == 0){
					//Eliminamos
					$d_g = Gerente::find($id);
					$d_g->delete();

					return Response::json($id);

	} else {
		 $g = "Existe";
			$gerente = DB::table('gerente')
			       ->where('id', $id)
										->select('nombre', 'paterno')
										->first();

		 return Response::json(array(
					   'g' => $g,
				    'gerente' => $gerente
			));
	}


}


	//Editar gerente
public function getEditaragerente(){
	$id = Input::get('id');

	$gerente = DB::table('gerente')
								->where('id', $id)
								->first();

	return Response::json($gerente);

}

	//Actualizar gerente
public function getActualizaragerente(){
	$id = Input::get('id');
	$nombre = Input::get('nombre');
	$paterno = Input::get('paterno');
	$materno = Input::get('materno');
	$email = Input::get('email');

	//verificamos que no exista el email
	$g_email = DB::table('gerente')
						->where('email', $email)
						->where('id', '!=', $id)
						->get();


	if(count($g_email)){
		$e = "Existe";
		return Response::json($e);
	} else {
		//actualizamos
		$new_g = Gerente::find($id);
		$new_g->nombre = $nombre;
		$new_g->paterno = $paterno;
		$new_g->materno = $materno;
		$new_g->email = $email;
		$new_g->save();

		$n_g = DB::table('gerente')
				->where('id', $id)
			->first();

		return Response::json($n_g);

	}


}


/*******
Catalogo plazas-------
******************************************/
public function getPlazas(){
    if(Auth::check()){
      return View::make('admin/plazas');
    } else {
        return Redirect::to('login');
    }
 }


//Listar plazas
public function getListaplazas(){
	$plazas = DB::table('plaza')
	 	->get();

	echo json_encode($plazas);
}


	//Agregar plaza
public function postAgregarplaza(){
	$nombre = Input::get('nombre');
	$activo = Input::get('activo');

	 $n_p = new Plaza;
		$n_p->nombre_plaza = $nombre;
	 $n_p->estatus = $activo;
	 $n_p->save();

		$plaza = DB::table('plaza')
								->where('nombre_plaza', $nombre)
								->where('estatus', $activo)
								->first();

		return Response::json($plaza);



}

//Eliminar plaza
public function getEliminarplaza(){
	$id = Input::get('id');

	//comprobamos que la plaza no este en uso
	$tipo_vehiculo_plaza = DB::table('tipo_vehiculo_plaza')
									->where('plaza_id', $id)
									->get();

	$oficinas = DB::table('oficina')
									->where('plaza_id', $id)
									->get();

	if(count($tipo_vehiculo_plaza) == 0 and count($oficinas) == 0){
					//Eliminamos
					$d_p = Plaza::find($id);
					$d_p->delete();

					return Response::json($id);

	} else {
		 $p = "Existe";
			$plaza = DB::table('plaza')
			       ->where('id', $id)
										->select('nombre_plaza')
										->first();

		 return Response::json(array(
					   'p' => $p,
				    'plaza' => $plaza
			));
	}


}


	//Editar plaza
public function getEditarplaza(){
	$id = Input::get('id');

	$plaza = DB::table('plaza')
								->where('id', $id)
								->first();

	return Response::json($plaza);

}



	//Actualizar plaza
public function getActualizarplaza(){
	$id = Input::get('id');
	$nombre = Input::get('nombre');
	$estatus = Input::get('estatus');


		//actualizamos
		$new_p = Plaza::find($id);
		$new_p->nombre_plaza = $nombre;
		$new_p->estatus = $estatus;
		$new_p->save();

		$n_p = DB::table('plaza')
				->where('id', $id)
			->first();

		return Response::json($n_p);



}



/*******
Catalogo oficinas-------
******************************************/
public function getOficinas(){
    if(Auth::check()){
      return View::make('admin/oficinas');
    } else {
        return Redirect::to('login');
    }
 }


//Listar oficinas
public function getListaoficinas(){
	$oficinas = DB::table('oficina')
			->join('plaza', 'oficina.plaza_id', '=', 'plaza.id')
			->select('oficina.id', 'nombre_oficina', 'clave', 'nombre_plaza')
	 	->get();

	echo json_encode($oficinas);
}

//Agregar oficinas
public function postAgregaroficina(){
	$nombre = Input::get('nombre');
	$plaza = Input::get('plaza');
	$clave = Input::get('clave');

	 $n_o = new Oficina;
	 $n_o->plaza_id = $plaza;
		$n_o->nombre_oficina = $nombre;
	 $n_o->clave = $clave;
	 $n_o->save();

		$oficina = DB::table('oficina')
							 ->join('plaza', 'oficina.plaza_id', '=', 'plaza.id')
								->where('plaza_id', $plaza)
								->where('nombre_oficina', $nombre)
			     ->where('clave', $clave)
								->select('oficina.id', 'nombre_oficina', 'clave', 'oficina.created_at', 'nombre_plaza')
								->first();

		return Response::json($oficina);


}

//Eliminar oficinaa
public function getEliminaroficina(){
	$id = Input::get('id');

	//comprobamos que la oficina no este en uso
	$oficina = DB::table('tarifa')
									->where('oficina_id', $id)
									->get();


	if(count($oficina) == 0){
					//Eliminamos
					$d_o = Oficina::find($id);
					$d_o->delete();

					return Response::json($id);

	} else {
		 $p = "Existe";
			$oficina = DB::table('oficina')
			       ->where('id', $id)
										->select('nombre_oficina')
										->first();

		 return Response::json(array(
					   'p' => $p,
				    'oficina' => $oficina
			));
	}


}


	//Editar oficina
public function getEditaroficina(){
	$id = Input::get('id');

	$oficina = DB::table('oficina')
								->where('id', $id)
								->first();

	return Response::json($oficina);

}

	//Actualizar oficina
public function getActualizaroficina(){
	$id = Input::get('id');
	$plaza = Input::get('plaza');
	$nombre = Input::get('nombre');
	$clave = Input::get('clave');


		//actualizamos
		$new_o = Oficina::find($id);
		$new_o->plaza_id = $plaza;
		$new_o->nombre_oficina = $nombre;
	 $new_o->clave = $clave;
		$new_o->save();

		$n_o = DB::table('oficina')
			 ->join('plaza', 'oficina.plaza_id', '=', 'plaza.id')
			 ->select('oficina.id', 'nombre_oficina', 'clave', 'nombre_plaza')
				->where('oficina.id', $id)
		 	->first();

		return Response::json($n_o);


}




//Listar plazas para editar
public function getSelecteditplazasoficina(){
	$id = Input::get('id'); //id de la oficina

	//obtenemos el id de la plaza
	$p = DB::table('oficina')
						->where('id', $id)
						->pluck('plaza_id');

	//Listamos las plazas
	$plazas = DB::table('plaza')
		 ->select('id', 'nombre_plaza')
		 ->where('id', '!=', $p)
			->where('estatus', '1')
	 	->get();

	//lISTAMOS la plaza actual
	$p_a = DB::table('plaza')
				->select('id', 'nombre_plaza')
			 ->where('id', '=', $p)
	  	->get();

	return Response::json(array(
		 'plazas' => $plazas,
		 'p_a' => $p_a
	 ));
}


/*******
Catalogo grupos-------
******************************************/
public function getGrupos(){
    if(Auth::check()){
      return View::make('admin/grupos');
    } else {
        return Redirect::to('login');
    }
 }


	//Listar grupos
public function getListagrupos(){
	$grupos = DB::table('grupo')
	 	->get();

	echo json_encode($grupos);
}


		//Agregar grupos
public function postAgregargrupo(){
	$nombre = Input::get('nombre');
	$activo = Input::get('activo');

	 $n_g = new Grupo;
		$n_g->descripcion_grupo = $nombre;
	 $n_g->estatus = $activo;
	 $n_g->save();

		$grupo = DB::table('grupo')
								->where('descripcion_grupo', $nombre)
								->where('estatus', $activo)
								->first();

		return Response::json($grupo);


}

//Eliminar grupo
public function getEliminargrupo(){
	$id = Input::get('id');

	//comprobamos que el grupo no este en uso
	$grupo = DB::table('tarifa_detalle')
									->where('grupo_id', $id)
									->get();


	if(count($grupo) == 0){
					//Eliminamos
					$d_g = Grupo::find($id);
					$d_g->delete();

					return Response::json($id);

	} else {
		 $p = "Existe";
			$grupo = DB::table('grupo')
			       ->where('id', $id)
										->select('descripcion_grupo')
										->first();

		 return Response::json(array(
					   'p' => $p,
				    'grupo' => $grupo
			));
	}


}


	//Editar grupo
public function getEditargrupo(){
	$id = Input::get('id');

	$grupo = DB::table('grupo')
								->where('id', $id)
								->first();

	return Response::json($grupo);

}


	//Actualizar grupo
public function getActualizargrupo(){
	$id = Input::get('id');
	$nombre = Input::get('nombre');
	$estatus = Input::get('estatus');


		//actualizamos
		$new_g = Grupo::find($id);
		$new_g->descripcion_grupo = $nombre;
		$new_g->estatus = $estatus;
		$new_g->save();

		$n_g = DB::table('grupo')
				->where('id', $id)
			->first();

		return Response::json($n_g);



}


/*******
Catalogo codigos-------
******************************************/
public function getCodigos(){
    if(Auth::check()){
      return View::make('admin/codigos');
    } else {
        return Redirect::to('login');
    }
 }


	//Listar codigos
public function getListacodigos(){
	$codigos = DB::table('codigo')
	 	->get();

	echo json_encode($codigos);
}


		//Agregar codigo
public function postAgregarcodigo(){
	$codigo = Input::get('codigo');
	$descripcion = Input::get('descripcion');
	$activo = Input::get('activo');
	$tipo = Input::get('tipo');

	 $n_c = new Codigo;
	 $n_c->codigo = $codigo;
	 $n_c->descripcion_codigo = $descripcion;
	 $n_c->estatus = $activo;
	 $n_c->save();

		$codigo = DB::table('codigo')
					 ->where('id', $n_c['id'])
					 ->first();

		return Response::json($codigo);


}

//Eliminar codigo
public function getEliminarcodigo(){
	$id = Input::get('id');

	//comprobamos que el codigo no este en uso en los vehiculos


		$v = DB::table('tipo_vehiculo')
									->where('codigo_id', $id)
									->get();


	if(count($v) == 0){
					//Eliminamos
					$d_g = Codigo::find($id);
					$d_g->delete();

					return Response::json($id);

	} else {
		 $p = "Existe";
			$codigo = DB::table('codigo')
			       ->where('id', $id)
										->select('codigo')
										->first();

		 return Response::json(array(
					   'p' => $p,
				    'codigo' => $codigo
			));
	}


}


	//Editar codigo
public function getEditarcodigo(){
	$id = Input::get('id');

	$codigo = DB::table('codigo')
								->where('id', $id)
								->first();

	return Response::json($codigo);

}


	//Actualizar codigo
public function getActualizarcodigo(){
	$id = Input::get('id');
	$nombre = Input::get('nombre');
	$descripcion = Input::get('descripcion');
	$estatus = Input::get('estatus');


		//actualizamos
		$new_c = Codigo::find($id);
		$new_c->codigo = $nombre;
	  $new_c->descripcion_codigo = $descripcion;
		$new_c->estatus = $estatus;
		$new_c->save();

		$n_c = DB::table('codigo')
				->where('id', $id)
			->first();

		return Response::json($n_c);



}




/*******
Catalogo coberturas-------
******************************************/
public function getCoberturas(){
    if(Auth::check()){
      return View::make('admin/coberturas');
    } else {
        return Redirect::to('login');
    }
 }


	//Listar cobertura
public function getListacoberturas(){
	$coberturas = DB::table('cobertura')
	 	->get();

	echo json_encode($coberturas);
}


		//Agregar cobertura
public function postAgregarcobertura(){
	$cobertura = Input::get('cobertura');
	$activo = Input::get('activo');

	 $n_c = new Cobertura;
		$n_c->cobertura = $cobertura;
	 $n_c->estatus = $activo;
	 $n_c->save();

		$cobertura_n = DB::table('cobertura')
								->where('cobertura', $cobertura)
								->where('estatus', $activo)
								->first();

		return Response::json($cobertura_n);


}

//Eliminar cobertura
public function getEliminarcobertura(){
	$id = Input::get('id');

	//comprobamos que la cobertura no este en uso
	$cobertura = DB::table('tarifa_detalle')
									->where('cobertura_id', $id)
									->get();


	if(count($cobertura) == 0){
					//Eliminamos
					$d_c = Cobertura::find($id);
					$d_c->delete();

					return Response::json($id);

	} else {
		 $p = "Existe";
			$cobertura = DB::table('cobertura')
			       ->where('id', $id)
										->select('cobertura')
										->first();

		 return Response::json(array(
					   'p' => $p,
				    'cobertura' => $cobertura
			));
	}


}


	//Editar cobertura
public function getEditarcobertura(){
	$id = Input::get('id');

	$cobertura = DB::table('cobertura')
								->where('id', $id)
								->first();

	return Response::json($cobertura);

}


	//Actualizar cobertura
public function getActualizarcobertura(){
	$id = Input::get('id');
	$cobertura = Input::get('cobertura');
	$estatus = Input::get('estatus');


		//actualizamos
		$new_c = Cobertura::find($id);
		$new_c->cobertura = $cobertura;
		$new_c->estatus = $estatus;
		$new_c->save();

		$n_c = DB::table('cobertura')
				->where('id', $id)
			->first();

		return Response::json($n_c);



}




/*******
Catalogo vehículos-------
******************************************/
public function getVehiculos(){
    if(Auth::check()){
      return View::make('admin/vehiculos');
    } else {
        return Redirect::to('login');
    }
 }


	//Listar vehiculos
public function getListavehiculos(){
	$vehiculos = DB::table('tipo_vehiculo')
									->join('codigo', 'tipo_vehiculo.codigo_id', '=', 'codigo.id')
									->select('tipo_vehiculo.id', 'descripcion','transmision', 'foto', 'tipo_vehiculo.estatus', 'tipo_vehiculo.created_at','codigo', 'descripcion_codigo')
	 	      ->get();

	    echo json_encode($vehiculos);
}


//Ver foto del vehiculo
public function getVerfotovehiculo(){
	$id = Input::get('id');

	$vehiculo = DB::table('tipo_vehiculo')
													->select('foto')
													->where('id', $id)
													->first();

	return Response::json($vehiculo);

}


		//Agregar vehiculo
public function postAgregarvehiculo(){

	$file = $_FILES['imagen']['name'];

		//comprobamos si existe un directorio para subir el archivo
	//si no es así, lo creamos
	if(!is_dir("img/vehiculos/"))
					mkdir("img/vehiculos/", 0777);

	$archivo = $_FILES['imagen']["tmp_name"];
	$destino = "img/vehiculos/".$_FILES['imagen']['name'];

	move_uploaded_file($archivo, $destino);

	$nombre = Input::get('nombre');
	$tipo = Input::get('tipo_c');
	$transmision = Input::get('transmision');
	$activo = Input::get('inp-check');

	 $n_v = new TipoVehiculo;
		$n_v->codigo_id = $tipo;
	 $n_v->descripcion = $nombre;
	 $n_v->transmision = $transmision;
	 $n_v->foto = $_FILES['imagen']['name'];
	 $n_v->estatus = $activo;
	 $n_v->save();

		$vehiculo = DB::table('tipo_vehiculo')
			     	->join('codigo', 'tipo_vehiculo.codigo_id', '=', 'codigo.id')
									->select('tipo_vehiculo.id', 'descripcion','transmision', 'foto', 'tipo_vehiculo.estatus', 'tipo_vehiculo.created_at','codigo', 'descripcion_codigo')
								->where('codigo_id', $tipo)
			     ->where('descripcion', $nombre)
			     ->where('transmision', $transmision)
								->where('tipo_vehiculo.estatus', $activo)
								->first();

		return Response::json($vehiculo);


} 

//Agregar las plazas del vehiculo
public function postAgregarplazavehiculo(){
    $datos = json_decode(Input::get('aInfo'));

    for ($i=0; $i < count($datos); $i++) {

      $plaza_vehiculo = new TipoVehiculoPlaza;
      $plaza_vehiculo->tipo_vehiculo_id = $datos[$i]->id_v;
      $plaza_vehiculo->plaza_id = $datos[$i]->id_plaza;
      $plaza_vehiculo->save();

    }

}

//Eliminar vehiculo
public function getEliminarvehiculo(){
	$id = Input::get('id');

	//comprobamos que el vehiculo no este en uso en las tarifas
	$vehiculo = DB::table('tarifa_detalle')
									->where('tipo_vehiculo_id', $id)
									->get();


	if(count($vehiculo) == 0){

        //Comprobamos si el vehiculo tiene plazas
        $t_d = DB::table('tipo_vehiculo_plaza')
                    ->where('tipo_vehiculo_id', $id)
                    ->get();

         if(count($t_d) == 0){

          //Eliminamos
          $d_v = TipoVehiculo::find($id);
          $d_v->delete();

          return Response::json($id);

          } else {

              //obtenemos el numero total de plazas que tiene el vehiculo
            $t_n = DB::table('tipo_vehiculo_plaza')
                        ->where('tipo_vehiculo_id', $id)
                        ->count();

    for ($i=0; $i < $t_n; $i++) {

      $t_a = DB::table('tipo_vehiculo_plaza')
              ->where('tipo_vehiculo_id', $id)
              ->orderBy('created_at')
              ->pluck('id');


        //Eliminamos el detalle
        $t = TipoVehiculoPlaza::find($t_a);
        $t->delete();


    }

      //Eliminamos el vehiculo
      $t = TipoVehiculo::find($id);
      $t->delete();

        return Response::json($id);

    } //end else


	} else {
		 $p = "Existe";
			$vehiculo = DB::table('tipo_vehiculo')
			       ->where('id', $id)
										->select('descripcion')
										->first();

		 return Response::json(array(
					   'p' => $p,
				    'vehiculo' => $vehiculo
			));
	}


}

	//Editar vehiculo
public function getEditarvehiculo(){
	$id = Input::get('id');

	$v = DB::table('tipo_vehiculo')
								->where('id', $id)
								->first();

	return Response::json($v);

}

	//Listamos los codigos
	public function getSelectcodigoseditdetallevehiculo(){
	$id = Input::get('id');

	$x = DB::table('tipo_vehiculo')
						->where('id', $id)
						->pluck('codigo_id');

  //foto del vehiculo
  $x_f = DB::table('tipo_vehiculo')
            ->where('id', $id)
            ->pluck('foto');

		$codigos = DB::table('codigo')
			->select('id', 'codigo', 'descripcion_codigo')
			->where('id', '!=', $x)
			->where('estatus', '1')
	 	->get();

	$x_a = DB::table('codigo')
			->select('id', 'codigo', 'descripcion_codigo')
			->where('id', '=', $x)
	 	  ->get();

	return Response::json(array(
		  'codigos' => $codigos,
				'x_a' => $x_a,
        'x_f' => $x_f
	 ));
}

//Listar las plazas del vehiculo
public function getListarplazasvehiculo(){
  $id = Input::get('id');

  $t_d = DB::table('tipo_vehiculo_plaza')
     ->join('tipo_vehiculo', 'tipo_vehiculo_plaza.tipo_vehiculo_id', '=', 'tipo_vehiculo.id')
     ->join('plaza', 'tipo_vehiculo_plaza.plaza_id', '=', 'plaza.id')
      ->select('tipo_vehiculo_plaza.id', 'nombre_plaza', 'plaza_id')
      ->where('tipo_vehiculo_plaza.tipo_vehiculo_id', '=', $id)
    ->get();


  return Response::json(array(
      't_d' => $t_d,
   ));
}

//eliminar plaza del vehiculo
public function getEliminarplazavehiculo(){
  $id = Input::get('id');

  $v_p = TipoVehiculoPlaza::find($id);
  $v_p->delete();

  return Response::json($id);

}

//Agregar nueva plaza al vehiculo
public function postAgregarnuevaplazavehiculo(){
  $id_vehiculo = Input::get('id_vehiculo');
  $id_plaza = Input::get('id_plaza');

  $v_n = new TipoVehiculoPlaza;
  $v_n->tipo_vehiculo_id = $id_vehiculo;
  $v_n->plaza_id = $id_plaza;
  $v_n->save();

  $vn = DB::table('tipo_vehiculo_plaza')
      ->join('tipo_vehiculo', 'tipo_vehiculo_plaza.tipo_vehiculo_id', '=', 'tipo_vehiculo.id')
      ->join('plaza', 'tipo_vehiculo_plaza.plaza_id', '=', 'plaza.id')
      ->select('tipo_vehiculo_plaza.id', 'nombre_plaza', 'plaza_id')
      ->where('tipo_vehiculo_plaza.id', '=', $v_n['id'])
      ->first();

  return Response::json($vn);

}

//Editar la plaza del vehiculo
  public function getEditarlaplazadelvehiculo(){
  $id = Input::get('id');

  $x = DB::table('tipo_vehiculo_plaza')
            ->where('id', $id)
            ->pluck('plaza_id');

    $plazas = DB::table('plaza')
      ->select('id', 'nombre_plaza')
      ->where('id', '!=', $x)
      ->where('estatus', '1')
      ->get();

  $x_p = DB::table('plaza')
      ->select('id', 'nombre_plaza')
      ->where('id', '=', $x)
      ->get();

  return Response::json(array(
      'plazas' => $plazas,
       'x_p' => $x_p
   ));
}

  //Actualizar la plaza del vehiculo
public function getActualizarplazadelvehiculo(){
  $id = Input::get('id');
  $id_plaza = Input::get('id_plaza');

  $p = TipoVehiculoPlaza::find($id);
  $p->plaza_id = $id_plaza;
  $p->save();

  //retornamos
  $p_n = DB::table('tipo_vehiculo_plaza')
      ->join('tipo_vehiculo', 'tipo_vehiculo_plaza.tipo_vehiculo_id', '=', 'tipo_vehiculo.id')
      ->join('plaza', 'tipo_vehiculo_plaza.plaza_id', '=', 'plaza.id')
      ->select('tipo_vehiculo_plaza.id', 'nombre_plaza', 'plaza_id')
      ->where('tipo_vehiculo_plaza.id', '=', $id)
        ->first();

  return Response::json($p_n);

}

	//Actualizar vehiculo
public function postActualizarvehiculo(){
		$file = $_FILES['imagen-edit']['name'];

		//comprobamos si existe un directorio para subir el archivo
	//si no es así, lo creamos
	if(!is_dir("img/vehiculos/"))
					mkdir("img/vehiculos/", 0777);

	$archivo = $_FILES['imagen-edit']["tmp_name"];
	$destino = "img/vehiculos/".$_FILES['imagen-edit']['name'];

	move_uploaded_file($archivo, $destino);

	$id = Input::get('id_vehiculo');
	$nombre = Input::get('nombre_edit');
	$tipo = Input::get('tipo_c_edit');
	$transmision = Input::get('transmision-edit');
	$estatus = Input::get('inp-check_edit');
  $imagen_actual = Input::get('foto-edit-vehiculo');

  if($_FILES['imagen-edit']['name'] == ''){

        //actualizamos
      $new_v = TipoVehiculo::find($id);
      $new_v->codigo_id = $tipo;
      $new_v->descripcion = $nombre;
      $new_v->transmision = $transmision;
      $new_v->foto = $imagen_actual;
      $new_v->estatus = $estatus;
      $new_v->save();

  }  else {

  		//actualizamos
  		$new_v = TipoVehiculo::find($id);
  		$new_v->codigo_id = $tipo;
  	  $new_v->descripcion = $nombre;
  	  $new_v->transmision = $transmision;
  	  $new_v->foto = $_FILES['imagen-edit']['name'];
  		$new_v->estatus = $estatus;
  		$new_v->save();
  }


		$n_v = DB::table('tipo_vehiculo')
			 ->join('codigo', 'tipo_vehiculo.codigo_id', '=', 'codigo.id')
			->select('tipo_vehiculo.id', 'descripcion','transmision', 'foto', 'tipo_vehiculo.estatus', 'tipo_vehiculo.created_at','codigo', 'descripcion_codigo')
				->where('tipo_vehiculo.id', $id)
			 ->first();

		return Response::json($n_v);



}



/*******
Catalogo usuario-------
******************************************/
public function getUsuarios(){
    if(Auth::check()){
      return View::make('admin/usuarios');
    } else {
        return Redirect::to('login');
    }
 }


	//Listar usuarios
public function getListausuarios(){
	$usuarios = DB::table('usuario')
	 	->get();

	echo json_encode($usuarios);
}

	//Verificar contraseñas
	public function postVerificarpass(){
		$pass1 = Input::get('pass1');
		$pass2 = Input::get('pass2');
		if($pass1 != $pass2){
			$e = 'Diferentes';
		 return Response::json($e);
		} else {
			$e = 'Iguales';
		 return Response::json($e);
		}
	}


		//Agregar usuario
public function postAgregarusuario(){
	$usuario = Input::get('usuario');
	$email = Input::get('email');
	$pass1 = Input::get('pass1');
	$pass2 = Input::get('pass2');

	if($pass1 != $pass2){
		$e = 'Diferentes';
		return Response::json($e);
	} else{
			$n_u = new Usuario;
			$n_u->usuario = $usuario;
			$n_u->password = Hash::make($pass1);
			$n_u->email = $email;
			$n_u->save();

			$usuario = DB::table('usuario')
									->where('usuario', $usuario)
									->where('email', $email)
									->first();

			return Response::json($usuario);

	}



}

//Eliminar usuario
public function getEliminarusuario(){
	$id = Input::get('id');

	//comprobamos que el usuario no sea el de sesion
	$user_uso = Auth::user()->id;

	if($id != $user_uso){
					//Eliminamos
					$d_u = Usuario::find($id);
					$d_u->delete();

					return Response::json($id);

	} else {
		 $p = "Iguales";
			$usuario = DB::table('usuario')
			       ->where('id', $id)
										->select('usuario')
										->first();

		 return Response::json(array(
					   'p' => $p,
				    'usuario' => $usuario
			));
	}


}


	//Editar usuario
public function getEditarusuario(){
	$id = Input::get('id');

	$usuario = DB::table('usuario')
								->where('id', $id)
								->first();

	return Response::json($usuario);

}


	//Verificar contraseña actual
	public function postVerificarpassactual(){
		$pass = Input::get('pass');

		$user_id = Input::get('user_id');

		$p = DB::table('usuario')
				->where('id', $user_id)->pluck('password');

		if (Hash::check($pass, $p)) {
			 $pass = "coinciden";
			 return Response::json($pass);
			} else {
				$pass = "Diferentes";
			 return Response::json($pass);
			}

	}


	//Actualizar usuario
public function getActualizarusuario(){
	$id = Input::get('id');
	$usuario = Input::get('usuario');
	$email = Input::get('email');
	$pass1 = Input::get('pass1');
	$pass2 = Input::get('pass2');


	if($pass1 != $pass2){
		$e = 'Diferentes';
		return Response::json($e);
	} else{

			$u = Usuario::find($id);
			$u->usuario = $usuario;
			$u->password = Hash::make($pass2);
			$u->email = $email;
			$u->save();

			$user = DB::table('usuario')
									->where('id', $id)
									->first();

			return Response::json($user);

	}



}



/********
Cerrar sesion---
***************************/

public function logOut() {
    Auth::logout();
    return Redirect::to('login');
}



}//AdminController
