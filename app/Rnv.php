<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rnv extends Model
{
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
	
    //
    public function voluntario(){
    	return $this->hasOne('App\Voluntario', 'rut', 'rut');
    }

    public function rut() {
        return $this->belongsTo('App\Usuario', 'rut', 'rut');
    }
}
