<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
	
    //
    public function usuario(){
    	return $this->belongsTo('App\Usuario');
    }

    public function permiso(){
    	return $this->hasMany('App\Permiso');
    }
}
