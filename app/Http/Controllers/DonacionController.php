<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonacionController extends Controller
{
    public function index()
    {
    	return view('donaciones.index');
    }

    public function indexbienes()
    {
    	return view('donaciones.bienes');
    }
}
