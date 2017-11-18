<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicion extends Model
{
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    //
    public function bien(){
    	return $this->hasMany('App\Bien');
    }
}
