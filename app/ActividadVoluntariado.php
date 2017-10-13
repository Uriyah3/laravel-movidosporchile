<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadVoluntariado extends Model
{
    //
    public function voluntariado(){
    	return $this->belongsTo('App\Voluntariado');
    }
}
