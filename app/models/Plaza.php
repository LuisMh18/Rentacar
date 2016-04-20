<?php

class Plaza extends Eloquent{
    protected $table = "plaza";
	
	public function sucursales(){
		return $this->hasMany('Sucursal');
	}

	public function oficinas(){
		return $this->hasMany('Oficina');
	}



	
}