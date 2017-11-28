<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Donacion extends Model
{
    use Notifiable; 
    protected $guarded = [];


	public function scopeAprobado($query){
        return $query->whereHas('medida', function ($innerQuery) {
            $innerQuery->where('aprobada', '=', true);
        });
    }

    //
	public function medida(){
		return $this->belongsTo('App\Medida');
	}

    public function deposito(){
    	return $this->hasMany('App\Deposito');
    }
}
