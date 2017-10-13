<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locacion extends Model
{
    //
    public function catastrofe(){
    	return $this->belongsTo('App\Catastrofe');
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

    public function comuna(){
    	return $this->hasOne('App\Comuna');
    }

}
