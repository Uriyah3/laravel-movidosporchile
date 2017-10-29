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

    public function tipo_medida(){
    	return $this->belongsTo('App\TipoMedida');
    }

    public function rut() {
        return $this->belongsTo('App\Usuario', 'rut', 'rut');
    }
}
