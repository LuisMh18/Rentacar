<?php

class TelefonoSucursal extends Eloquent{
    protected $table = "telefono_sucursal";
	

	public function sucursal(){
		return $this->belongsTo('Sucursal');
	}

	public function tipoTel(){
		return $this->belongsTo('TipoTel');
	}


	
}
