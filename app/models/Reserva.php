<?php


class Reserva extends Eloquent{
    protected $table = "reserva";



	public function cliente(){
		return $this->belongsTo('Cliente');
	}

	public function tipoVehiculo(){
		return $this->belongsTo('TipoVehiculo');
	}
	
}