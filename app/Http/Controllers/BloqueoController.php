<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Usuario;

 

class BloqueoController extends Controller 
{
	//mostrar todos los usuarios
	public function index()
	{
		
		$usuarios = Usuario::with('rol')->orderBy('created_at','desc')->paginate(6);

		

		return view('bloqueos.index',compact('usuarios')); 
	}

}