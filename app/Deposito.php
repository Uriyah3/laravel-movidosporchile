<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposito extends Model
{
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    protected $guarded = [];

    //
    public function donacion(){
    	return $this->belongsTo('App\Donacion');
    }

    public function usuario() {
        return $this->belongsTo('App\Usuario');
    }
}
