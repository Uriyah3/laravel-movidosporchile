<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
	
    //
    public function centro_acopio(){
    	return $this->hasMany('App\CentroAcopio');
    }
}
