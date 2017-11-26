<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Usuario;

class UsuarioController extends Controller
{

    public function index()
	{
		
		return view('actividades.index');
	}
}
