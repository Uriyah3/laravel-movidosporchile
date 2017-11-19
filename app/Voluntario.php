<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    //
    public function voluntariado(){
    	return $this->belongsTo('App\Voluntariado');
    }

    public function usuario() {
        return $this->belongsTo('App\Usuario');
    }

}
