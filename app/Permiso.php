<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    //
    public function rol(){
    	return $this->belongsTo('App\Rol');
    }
}
