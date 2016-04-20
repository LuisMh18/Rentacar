<?php

class Gerente extends Eloquent{
    protected $table = "gerente";
	
	public function sucursales(){
		return $this->hasMany('Sucursal');
	}


	
}
