<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposito extends Model
{
    //
    public function donacion(){
    	return $this->belongsTo('App\Donacion');
    }
}