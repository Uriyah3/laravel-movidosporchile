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

    public function registro_actividad(){
    	return $this->hasMany('App\RegistroActividad');
    }
}
