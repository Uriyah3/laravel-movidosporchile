<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rnv extends Model
{
    //
    public function voluntario(){
    	return $this->hasOne('App\Voluntario', 'rut');
    }
}
