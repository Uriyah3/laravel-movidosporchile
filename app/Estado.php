<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //
    public function centro_acopio(){
    	return $this->belongsTo('App\CentroAcopio');
    }
}
