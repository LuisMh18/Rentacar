<?php

class Codigo extends Eloquent{
    protected $table = "codigo";
	
	public function tarifaDetalles(){
		return $this->hasMany('TarifaDetalle');
	}


	
}

	

		
