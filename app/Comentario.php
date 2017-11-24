<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //
    public function usuario(){
    	return $this->belongsTo('App\Usuario');
    }

     public function medida(){
        return $this->belongsTo('App\Medida');
    }
}
