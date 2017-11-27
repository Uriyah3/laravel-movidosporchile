<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    //
    public function voluntariado(){
    	return $this->belongsTo('App\Voluntariado');
    }

    public function usuario() {
        return $this->belongsTo('App\Usuario');
    }

}
