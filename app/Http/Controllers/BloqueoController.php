<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Usuario;

 

class BloqueoController extends Controller 
{


	public function destroy(Usuario $usuario)
	{
		$Usuario->delete();

		return redirect( url('bloqueos'));

	}

	//mostrar todos los usuarios
	public function index()
	{
		
		$usuarios = Usuario::with('rol')->orderBy('created_at','desc')->paginate(6);

		

		return view('bloqueos.index',compact('usuarios')); 
	}

}