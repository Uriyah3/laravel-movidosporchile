<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
	public function rol(){
    	return $this->belongsTo('App\Rol');
    }

    public function catastrofe(){
    	return $this->hasMany('App\Catastrofe');
    }

    public function centro_acopio(){
    	return $this->hasMany('App\Medida');
    }

    public function gasto(){
    	return $this->hasMany('App\Gasto');
    }

    public function registro_actividad(){
    	return $this->hasMany('App\RegistroActividad');
    }

    public function comentario(){
        return $this->hasMany('App\Comentario');
    }

    public function bien() {
        return $this->hasMany('App\Bien');
    }

    public function voluntario() {
        return $this->hasMany('App\Voluntario');
    }

    public function deposito() {
        return $this->hasMany('App\Deposito');
    }

}
