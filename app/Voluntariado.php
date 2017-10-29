<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntariado extends Model
{
    //
    public function usuario(){
    	return $this->belongsTo('App\Usuario');
    }

    public function voluntario(){
    	return $this->hasMany('App\Voluntario');
    }

    public function locacion(){
    	return $this->belongsTo('App\Locacion');
    }

    public function comentario(){
        return $this->belongsToMany('App\Comentario');
    }
    
    public function actividad_voluntariado(){
        return $this->belongsTo('App\ActividadVoluntariado');
    }
}
