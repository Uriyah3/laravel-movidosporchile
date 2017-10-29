<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //
    public function usuario(){
    	return $this->belongsTo('App\Usuario');
    }

    public function centro_acopio(){
    	return $this->belongsToMany('App\CentroAcopio', 'comentario_centro_acopio');
    }

    public function voluntariado(){
    	return $this->belongsToMany('App\Voluntariado');
    }

    public function evento_a_beneficio(){
    	return $this->belongsToMany('App\EventoABeneficio');
    }

    public function donacion(){
    	return $this->belongsToMany('App\Donacion');
    }
}
