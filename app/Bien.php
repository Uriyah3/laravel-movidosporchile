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
    protected $guarded = [];

    //
    public function centro_acopio(){
    	return $this->belongsTo('App\CentroAcopio');
    }

    public function medicion(){
    	return $this->belongsTo('App\Medicion');
    }

    public function usuario() {
        return $this->belongsTo('App\Usuario');
    }
}
