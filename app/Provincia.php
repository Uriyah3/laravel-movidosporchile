<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
	
    //

    public function comuna(){
    	return $this->hasMany('App\Comuna');
    }

    public function region(){
    	return $this->belongsTo('App\Region');
    }
}
