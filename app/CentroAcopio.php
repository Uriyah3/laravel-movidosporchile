<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentroAcopio extends Model
{
    //
    public function medida(){
        return $this->belongsTo('App\Medida');
    }

    public function bien(){
    	return $this->hasMany('App\Bien');
    }

    public function estado(){
    	return $this->belongsTo('App\Estado');
    }

    public function locacion(){
        return $this->belongsTo('App\Locacion');
    }
}
