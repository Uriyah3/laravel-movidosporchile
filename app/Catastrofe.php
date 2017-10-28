<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catastrofe extends Model
{
    //
    public function usuario(){
    	return $this->belongsTo('App\Usuario');
    }

    public function locacion(){
    	return $this->hasOne('App\Locacion');
    }

    public function tipo_catastrofe(){
    	return $this->belongsTo('App\TipoCatastrofe');
    }
}
