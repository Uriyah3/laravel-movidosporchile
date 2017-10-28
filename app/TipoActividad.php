<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoActividad extends Model
{
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
	
    //

    public function evento_a_beneficio(){
    	return $this->hasMany('App\EventoABeneficio');
    }
}
