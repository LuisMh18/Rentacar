<?php

class TipoVehiculoPlaza extends Eloquent{
    protected $table = "tipo_vehiculo_plaza";
	

	public function tipoVehiculo(){
		return $this->belongsTo('TipoVehiculo');
	}

	public function plaza(){
		return $this->belongsTo('Plaza');
	}


	
}
