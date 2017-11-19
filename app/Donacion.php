<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    //
	public function medida(){
		return $this->belongsTo('App\Medida');
	}

    public function deposito(){
    	return $this->hasMany('App\Deposito');
    }
}
