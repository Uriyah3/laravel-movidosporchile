<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    //
    public function usuario(){
    	return $this->belongsTo('App\Usuario');
    }

    public function comentario(){
        return $this->hasMany('App\Comentario');
    }
}
