<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
<<<<<<< HEAD

=======
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
	
>>>>>>> 6379f443ec6f640389ca56d08aa797a0b8feea1b
    //
    public function centro_acopio(){
    	return $this->belongsTo('App\CentroAcopio');
    }

    public function tipo_medida(){
    	return $this->belongsTo('App\TipoMedida');
    }
}
