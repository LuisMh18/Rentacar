<?php

class TipoTel extends Eloquent{
    protected $table = "tipo_tel";
	
	public function telefonoSucursales(){
		return $this->hasMany('TelefonoSucursal');
	}


	
}
