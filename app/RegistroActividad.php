<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroActividad extends Model
{
    //
    public function usuario(){
    	return $this->belongsTo('App\Usuario');
    }
}
