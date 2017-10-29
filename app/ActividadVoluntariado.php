<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadVoluntariado extends Model
{
<<<<<<< HEAD

=======
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
	
>>>>>>> 6379f443ec6f640389ca56d08aa797a0b8feea1b
    //
    public function voluntariado(){
    	return $this->hasMany('App\Voluntariado');
    }
}
