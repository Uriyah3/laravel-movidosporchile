<?php

namespace App\Http\Controllers\Auth;

use App\Usuario;
use App\Rol;
use App\Http\Controllers\Controller;
use App\Rules\RutValidator;
use App\Rules\RutUnique;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/catastrofes';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:60',
            'password' => 'required|string|min:6|max:50|confirmed',
            'nombre' => 'required|string|max:50',
            'rut' => ['required', new RutUnique, new RutValidator],
            'email' => 'required|string|email|max:120|unique:usuarios',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $rut = preg_replace('/[\.\-]/i', '', $data['rut']);
        $dv = substr($rut, -1);
        $rutNumeros = substr($rut, 0, strlen($rut) - 1);

        return Usuario::create([
            'rol_id' => Rol::where('nombre', '=', 'Usuario')->first()->id,
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            'rut' => $rutNumeros,
            'dv' => $dv,
            'nombre' => $data['nombre'],
            'telefono' => $data['telefono'],
            'email' => $data['email'],
        ]);
    }
}
