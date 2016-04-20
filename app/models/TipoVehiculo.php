<?php

class TipoVehiculo extends Eloquent{
    protected $table = "tipo_vehiculo";
	
	public function tarifaDetalles(){
		return $this->hasMany('TarifaDetalle');
	}


	
}
