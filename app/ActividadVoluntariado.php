<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadVoluntariado extends Model
{
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    //
    public function voluntariado(){
    	return $this->hasMany('App\Voluntariado');
    }
}
