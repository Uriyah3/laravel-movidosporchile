<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    //
    public function centro_acopio(){
    	return $this->belongsTo('App\CentroAcopio');
    }

    public function medicion(){
    	return $this->belongsTo('App\Medicion');
    }

    public function rut() {
        return $this->belongsTo('App\Usuario', 'rut', 'rut');
    }
}
