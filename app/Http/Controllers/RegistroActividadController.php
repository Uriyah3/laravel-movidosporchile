<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroActividadController extends Controller
{
    
	public function store()
	{
		return view('actividades.store');
	}


	public function index()
	{
		return view('actividades.index');
	}

}
