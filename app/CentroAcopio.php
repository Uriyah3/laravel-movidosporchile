<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentroAcopio extends Model
{
    //
    public function usuario(){
    	return $this->belongsTo('App\Usuario');
    }

    public function bien(){
    	return $this->hasMany('App\Bien');
    }

    public function estado(){
    	return $this->hasOne('App\Estado');
    }

    public function locacion(){
        return $this->hasOne('App\Locacion');
    }

    public function comentario(){
        return $this->hasMany('App\Comentario');
    }
}
