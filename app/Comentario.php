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
    	return $this->belongsTo('App\CentroAcopio');
    }

    public function voluntariado(){
    	return $this->belongsTo('App\Voluntariado');
    }

    public function evento_a_beneficio(){
    	return $this->belongsTo('App\EventoABeneficio');
    }

    public function donacion(){
    	return $this->belongsTo('App\Donacion');
    }
}
