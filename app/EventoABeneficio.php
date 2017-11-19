<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventoABeneficio extends Model
{
    //
	public function medida(){
		return $this->belongsTo('App\Medida');
	}

    public function locacion(){
    	return $this->belongsTo('App\Locacion');
    }
}
