<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoActividad extends Model
{
    //

    public function evento_a_beneficio(){
    	return $this->hasMany('App\EventoABeneficio');
    }
}
