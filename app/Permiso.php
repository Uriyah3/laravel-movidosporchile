<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
	
    //
    public function rol(){
    	return $this->belongsTo('App\Rol');
    }
}
