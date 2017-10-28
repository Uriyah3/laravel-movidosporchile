<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCatastrofe extends Model
{
    //
    public function catastrofe(){
    	return $this->hasMany('App\Catastrofe');
    }
}
