<?php

class TipoVehiculo extends Eloquent{
    protected $table = "tipo_vehiculo";

  public function tipoVehiculosPlazas(){
		return $this->hasMany('TipoVehiculoPlaza');
	}
	
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
