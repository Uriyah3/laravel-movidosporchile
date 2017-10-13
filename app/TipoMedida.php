<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMedida extends Model
{
    //
    public function bien(){
    	return $this->hasMany('App\Bien');
    }
}
