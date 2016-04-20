<?php

class Tarifa extends Eloquent{
    protected $table = "tarifa";
				
	public function tarifaDetalles(){
		return $this->hasMany('TarifaDetalle');
	}

	public function oficina(){
		return $this->belongsTo('Oficina');
	}
	
}
