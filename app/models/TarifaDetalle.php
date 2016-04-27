<?php

class TarifaDetalle extends Eloquent{
    protected $table = "tarifa_detalle";
				

	public function tarifa(){
		return $this->belongsTo('Tarifa');
	}
	
	public function grupo(){
		return $this->belongsTo('Grupo');
	}
	
		public function cobertura(){
		return $this->belongsTo('Cobertura');
	}
	
	public function codigo(){
		return $this->belongsTo('Codigo');
	}
	
	public function tipoVehiculo(){
		return $this->belongsTo('TipoVehiculo');
	}
	
}
