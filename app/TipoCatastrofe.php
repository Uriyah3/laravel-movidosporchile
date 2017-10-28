<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCatastrofe extends Model
{
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
	protected $table = 'tipo_catastrofes';

    //
    public function catastrofe(){
    	return $this->hasMany('App\Catastrofe');
    }
}
