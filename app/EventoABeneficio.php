<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventoABeneficio extends Model
{
    //
    public function usuario(){
    	return $this->belongsTo('App\Usuario');
    }

    public function locacion(){
    	return $this->hasOne('App\Locacion');
    }

    public function comentario(){
        return $this->hasMany('App\Comentario');
    }

    public function tipo_actividad(){
        return $this->hasMany('App\TipoActividad');
    }
}
