<?php

class TipoVehiculo extends Eloquent{
    protected $table = "tipo_vehiculo";
	
	public function tarifaDetalles(){
		return $this->hasMany('TarifaDetalle');
	}
	
		public function reservas(){
		return $this->hasMany('Reserva');
	}
	
	public function codigo(){
		return $this->belongsTo('Codigo');
	}


	
}
