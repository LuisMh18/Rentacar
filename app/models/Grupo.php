<?php

class Grupo extends Eloquent{
    protected $table = "grupo";
			
	public function tarifaDetalles(){
		return $this->hasMany('TarifaDetalle');
	}


	
}

