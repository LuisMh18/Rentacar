<?php

class Sucursal extends Eloquent{
    protected $table = "sucursal";
	
	public function telefonoSucursales(){
		return $this->hasMany('TelefonoSucursal');
	}

	public function gerente(){
		return $this->belongsTo('Gerente');
	}

	public function plaza(){
		return $this->belongsTo('Plaza');
	}


	
}
