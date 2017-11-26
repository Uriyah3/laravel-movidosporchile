<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rol_id', 'nombre', 'email', 'username', 'password', 'rut', 'dv', 'telefono',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    // Relacions
	public function rol(){
    	return $this->belongsTo('App\Rol');
    }

    public function registro_actividad(){
    	return $this->hasMany('App\RegistroActividad');
    }

    public function comentario(){
        return $this->hasMany('App\Comentario');
    }

    public function catastrofe(){
        return $this->hasMany('App\Catastrofe');
    }

    public function bien() {
        return $this->hasMany('App\Bien');
    }

    public function voluntario() {
        return $this->hasMany('App\Voluntario');
    }

    public function deposito() {
        return $this->hasMany('App\Deposito');
    }

    public function gasto(){
        return $this->hasMany('App\Gasto');
    }
}
