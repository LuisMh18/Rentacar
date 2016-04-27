<?php

class Cobertura extends Eloquent{
    protected $table = "cobertura";
			
	public function tarifaDetalles(){
		return $this->hasMany('TarifaDetalle');
	}


	
}

