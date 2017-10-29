<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    //
    public function usuario(){
    	return $this->belongsTo('App\Usuario');
    }

    public function deposito(){
    	return $this->hasMany('App\Deposito');
    }

    public function comentario(){
        return $this->hasMany('App\Comentario');
    }
}
