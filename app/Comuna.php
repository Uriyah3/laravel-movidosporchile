<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    //
    public function locacion(){
    	return $this->belongsTo('App\Locacion');
    }

    public function provincia(){
    	return $this->belongsTo('App\Provincia');
    }
}
