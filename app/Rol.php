<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    public function usuario(){
    	return $this->belongsTo('App\Usuario');
    }

    public function permiso(){
    	return $this->hasMany('App\Permiso');
    }
}
