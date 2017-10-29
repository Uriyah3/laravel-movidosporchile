<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
	public function rol(){
    	return $this->hasOne('App\Rol');
    }

    public function catastrofe(){
    	return $this->hasMany('App\Catastrofe');
    }

    public function centro_acopio(){
    	return $this->hasMany('App\CentroAcopio');
    }

    public function donacion(){
    	return $this->hasMany('App\Donacion');
    }

    public function voluntariado(){
    	return $this->hasMany('App\Voluntariado');
    }

    public function evento_a_beneficio(){
    	return $this->hasMany('App\EventoABeneficio');
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






}
