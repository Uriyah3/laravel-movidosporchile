<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
	
    //
    public function locacion(){
    	return $this->belongsTo('App\Locacion');
    }

    public function provincia(){
    	return $this->belongsTo('App\Provincia');
    }
}
