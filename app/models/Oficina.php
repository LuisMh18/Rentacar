<?php

class Oficina extends Eloquent{
    protected $table = "oficina";
	
	public function tarifas(){
		return $this->hasMany('Tarifa');
	}

	public function plaza(){
		return $this->belongsTo('Plaza');
	}



	
}
