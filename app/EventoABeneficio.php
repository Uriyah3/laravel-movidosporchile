<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventoABeneficio extends Model
{
    //
    public function usuario(){
    	return $this->belongsTo('App\Usuario');
    }

    public function locacion(){
    	return $this->belongsTo('App\Locacion');
    }

    public function comentario(){
        return $this->belongsToMany('App\Comentario');
    }
}
