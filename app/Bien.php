<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{

    //
    public function centro_acopio(){
    	return $this->belongsTo('App\CentroAcopio');
    }

    public function tipo_medida(){
    	return $this->belongsTo('App\TipoMedida');
    }
}
