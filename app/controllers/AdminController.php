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
	
	
	
 public function getReservas(){
    if(Auth::check()){
      return View::make('admin/reservas');
    } else {
        return Redirect::to('login');
    }
 }
	
/*******
Reservas------------
******************************************/	
	public function getMostrarsucursales(){
		$id = Input::get('id');
		
	$sucursal = DB::table('sucursal')
			->where('id', $id)
	 	->first();
	
 return Response::json($sucursal);
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
			->select('tarifa.id', 'nombre', 'fecha_inicio', 'fecha_fin', 'estatus')
	 	->get();
	
	echo json_encode($tarifas);
}
	
	//Listar oficinas
public function getSelectoficinas(){
	$oficinas = DB::table('oficina')
			->select('id', 'nombre')
	 	->get();
	
	return Response::json(array('oficinas' => $oficinas));
}
	
	//Listar grupos
public function getSelectgrupos(){
	$grupos = DB::table('grupo')
			->select('id', 'descripcion_grupo')
	 	->get();
	
	return Response::json(array('grupos' => $grupos));
}
	
	//Listar codigos
public function getSelectcodigos(){
	$codigos = DB::table('codigo')
			->select('id', 'codigo')
	 	->get();
	
	return Response::json(array('codigos' => $codigos));
}
	
	//Listar coberturas
public function getSelectcoberturas(){
	$coberturas = DB::table('cobertura')
			->select('id', 'cobertura')
	 	->get();
	
	return Response::json(array('coberturas' => $coberturas));
}
	
	//Listar los vehiculos
public function getSelectvehiculos(){
	$vehiculos = DB::table('tipo_vehiculo')
			->select('id', 'descripcion')
	 	->get();
	
	return Response::json(array('vehiculos' => $vehiculos));
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
		
		$id_t = DB::table('tarifa')
				->where('oficina_id', $id_oficina)
			 ->where('fecha_inicio', $fecha_inicio)
			 ->where('fecha_fin', $fecha_fin)
			 ->where('estatus', $activo)
		 	->pluck('id');
	
	$n_t = DB::table('tarifa')
	 ->join('oficina', 'tarifa.oficina_id', '=', 'oficina.id')
			->select('tarifa.id', 'nombre', 'fecha_inicio', 'fecha_fin', 'estatus')
		 ->where('tarifa.id', $id_t)
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
			 $tarifa_d->codigo_id = $datos[$i]->id_c;
			 $tarifa_d->cobertura_id = $datos[$i]->id_cobertura;
			 $tarifa_d->tipo_vehiculo_id = $datos[$i]->id_v;
				$tarifa_d->tarifa_por_dia = $datos[$i]->tarifa_por_dia;
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
			->select('id', 'nombre')
			->where('id', '!=', $o)
	 	->get();
	
	//lISTAMOS la oficina actual
	$o_a = DB::table('oficina')
			->select('id', 'nombre')
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
			->select('tarifa_detalle.id', 'descripcion_grupo', 'cobertura', 'codigo', 'tipo_vehiculo.descripcion', 'tarifa_por_dia')
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
			->select('id', 'codigo')
			->where('id', '!=', $x)
	 	->get();
	
	$x_a = DB::table('codigo')
			->select('id', 'codigo')
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
	
	$x = DB::table('tarifa_detalle')
						->where('id', $id)
						->pluck('tipo_vehiculo_id');
	
	$vehiculos = DB::table('tipo_vehiculo')
			->select('id', 'descripcion')
			->where('id', '!=', $x)
	 	->get();
	
	$x_a = DB::table('tipo_vehiculo')
			->select('id', 'descripcion')
			->where('id', '=', $x)
	 	->get();
	
	//Listamos la tarifa
	$tarifa = DB::table('tarifa_detalle')
						->select('tarifa_por_dia')
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
	
	$t = new TarifaDetalle;
	$t->tarifa_id = $id_tarifa;
	$t->grupo_id = $grupo;
	$t->codigo_id = $codigo;
	$t->cobertura_id = $cobertura;
	$t->tipo_vehiculo_id = $vehiculo;
	$t->tarifa_por_dia = $tarifa_por_dia;
	$t->save();
	
	//retornamos 
	$t_n = DB::table('tarifa_detalle')
								->join('grupo', 'tarifa_detalle.grupo_id', '=', 'grupo.id')
								->join('codigo', 'tarifa_detalle.codigo_id', '=', 'codigo.id')
								->join('cobertura', 'tarifa_detalle.cobertura_id', '=', 'cobertura.id')
								->join('tipo_vehiculo', 'tarifa_detalle.tipo_vehiculo_id', '=', 'tipo_vehiculo.id')
								->select('tarifa_detalle.id', 'descripcion_grupo', 'cobertura', 'codigo', 'tipo_vehiculo.descripcion', 'tarifa_por_dia')
								->where('tarifa_id', $id_tarifa)
		      ->where('grupo_id', $grupo)
		      ->where('codigo_id', $codigo)
		      ->where('cobertura_id', $cobertura)
		      ->where('tipo_vehiculo_id', $vehiculo)
		      ->where('tarifa_por_dia', $tarifa_por_dia)
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
	
	$t = TarifaDetalle::find($id);
	$t->tarifa_id = $id_tarifa;
	$t->grupo_id = $grupo;
	$t->codigo_id = $codigo;
	$t->cobertura_id = $cobertura;
	$t->tipo_vehiculo_id = $vehiculo;
	$t->tarifa_por_dia = $tarifa_por_dia;
	$t->save();
	
	//retornamos 
	$t_n = DB::table('tarifa_detalle')
								->join('grupo', 'tarifa_detalle.grupo_id', '=', 'grupo.id')
								->join('codigo', 'tarifa_detalle.codigo_id', '=', 'codigo.id')
								->join('cobertura', 'tarifa_detalle.cobertura_id', '=', 'cobertura.id')
								->join('tipo_vehiculo', 'tarifa_detalle.tipo_vehiculo_id', '=', 'tipo_vehiculo.id')
								->select('tarifa_detalle.id', 'descripcion_grupo', 'cobertura', 'codigo', 'tipo_vehiculo.descripcion', 'tarifa_por_dia')
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
								->select('tarifa.id', 'nombre', 'fecha_inicio', 'fecha_fin', 'estatus')
								->where('tarifa.id', $id)
								->first();
	
	return Response::json($t_n);
	
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
		 ->join('plaza', 'sucursal.plaza_id', '=', 'plaza.id')
			->select('sucursal.id', 'nombre_sucursal', 'sucursal.created_at', 'nombre', 'paterno', 'nombre_plaza','direccion1', 'direccion2', 'colonia', 'estado', 'municipio_delegacion', 'referencia', 'cp')
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
	
//Listar plazas
public function getSelectplazas(){
	$plazas = DB::table('plaza')
			->select('id', 'nombre_plaza')
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
		$new_s->plaza_id = $plaza;
		$new_s->nombre_sucursal = $sucursal;
		$new_s->direccion1 = $direccion1;
		$new_s->direccion2 = $direccion2;
		$new_s->colonia = $colonia;
 	$new_s->estado = $estado;
		$new_s->municipio_delegacion = $municipio;
		$new_s->cp = $cp;
		$new_s->referencia = $referencia;
		$new_s->save();
		
		$id_s = DB::table('sucursal')
				->where('gerente_id', $gerente)
			 ->where('plaza_id', $plaza)
			 ->where('nombre_sucursal', $sucursal)
			 ->where('direccion1', $direccion1)
		 	->pluck('id');
	
	$n_s = DB::table('sucursal')
				->join('gerente', 'sucursal.gerente_id', '=', 'gerente.id')
		 ->join('plaza', 'sucursal.plaza_id', '=', 'plaza.id')
			->select('sucursal.id', 'nombre_sucursal', 'sucursal.created_at', 'nombre', 'paterno', 'nombre_plaza','direccion1', 'direccion2', 'colonia', 'estado', 'municipio_delegacion', 'referencia', 'cp')
		 ->where('sucursal.id', $id_s)
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
	
	
//Listar plazas para editar
public function getSelecteditplazas(){
	$id_s = Input::get('id');
	
	//obtenemos el id de la plaza
	$p = DB::table('sucursal')
						->where('id', $id_s)
						->pluck('plaza_id');
	
	//Listamos las plazas
	$plazas = DB::table('plaza')
			->select('id', 'nombre_plaza')
		->where('id', '!=', $p)
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
		$new_s->plaza_id = $plaza;
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
		 ->join('plaza', 'sucursal.plaza_id', '=', 'plaza.id')
			->select('sucursal.id', 'nombre_sucursal', 'sucursal.created_at', 'nombre', 'paterno', 'nombre_plaza','direccion1', 'direccion2', 'colonia', 'estado', 'municipio_delegacion', 'referencia', 'cp')
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
	
	//comprobamos que la plaza no este en uso en el catalogo sucursal y
	//en el catalogo oficinas
	$sucursal = DB::table('sucursal')
									->where('plaza_id', $id)
									->get();
	
	$oficinas = DB::table('oficina')
									->where('plaza_id', $id)
									->get();
	
	if(count($sucursal) == 0 and count($oficinas) == 0){
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
			->select('oficina.id', 'nombre', 'clave', 'nombre_plaza')
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
		$n_o->nombre = $nombre;
	 $n_o->clave = $clave;
	 $n_o->save();
	
		$oficina = DB::table('oficina')
							 ->join('plaza', 'oficina.plaza_id', '=', 'plaza.id')
								->where('plaza_id', $plaza)
								->where('nombre', $nombre)
			     ->where('clave', $clave)
								->select('oficina.id', 'nombre', 'clave', 'oficina.created_at', 'nombre_plaza')
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
										->select('nombre')
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
		$new_o->nombre = $nombre;
	 $new_o->clave = $clave;
		$new_o->save();
		
		$n_o = DB::table('oficina')
			 ->join('plaza', 'oficina.plaza_id', '=', 'plaza.id')
			 ->select('oficina.id', 'nombre', 'clave', 'nombre_plaza')
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
	
	 $n_c = new Codigo;
		$n_c->codigo = $codigo;
	 $n_c->descripcion = $descripcion;
	 $n_c->estatus = $activo;
	 $n_c->save();
	
		$codigo = DB::table('codigo')
								->where('codigo', $codigo)
								->where('descripcion', $descripcion)
								->where('estatus', $activo)
								->first();
	
		return Response::json($codigo);
		
	
}
	
//Eliminar codigo
public function getEliminarcodigo(){
	$id = Input::get('id');
	
	//comprobamos que el codigo no este en uso
	$codigo = DB::table('tarifa_detalle')
									->where('codigo_id', $id)
									->get();

	
	if(count($codigo) == 0){
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
	 $new_c->descripcion = $descripcion;
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
	$activo = Input::get('inp-check');
	
	 $n_v = new TipoVehiculo;
		$n_v->descripcion = $nombre;
	 $n_v->foto = $_FILES['imagen']['name'];
	 $n_v->estatus = $activo;
	 $n_v->save();
	
		$vehiculo = DB::table('tipo_vehiculo')
								->where('descripcion', $nombre)
								->where('estatus', $activo)
								->first();
	
		return Response::json($vehiculo);
		
	
}
	
//Eliminar vehiculo
public function getEliminarvehiculo(){
	$id = Input::get('id');
	
	//comprobamos que el grupo no este en uso
	$vehiculo = DB::table('tarifa_detalle')
									->where('tipo_vehiculo_id', $id)
									->get();

	
	if(count($vehiculo) == 0){
					//Eliminamos
					$d_v = TipoVehiculo::find($id);
					$d_v->delete();

					return Response::json($id);
		
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
	$estatus = Input::get('inp-check_edit');
		

		//actualizamos
		$new_v = TipoVehiculo::find($id);
		$new_v->descripcion = $nombre;
	 $new_v->foto = $_FILES['imagen-edit']['name'];
		$new_v->estatus = $estatus;
		$new_v->save();
		
		$n_v = DB::table('tipo_vehiculo')
				->where('id', $id)
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
