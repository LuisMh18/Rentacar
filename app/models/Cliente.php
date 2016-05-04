<?php

class Cliente extends Eloquent{
    protected $table = "cliente";
	
	public function reservas(){
		return $this->hasMany('Reserva');
	}


	
}
