<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locacion extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    public $guarded = [];

    //
    public function catastrofe(){
    	return $this->hasOne('App\Catastrofe');
    }

    public function centro_acopio(){
    	return $this->hasOne('App\CentroAcopio');
    }

    public function voluntariado(){
    	return $this->hasOne('App\Voluntariado');
    }

    public function evento_a_beneficio(){
    	return $this->hasOne('App\EventoABeneficio');
    }

    public function comuna(){
    	return $this->belongsTo('App\Comuna');
    }

}
