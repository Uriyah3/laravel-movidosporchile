<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GastoController extends Controller
{
    
    public function store()
    {
    	return view('gastos.store');
    }


    public function index()
    {
    	return view('gastos.index');
    }


    public function create()
    {
    	return view('gastos.create');
    }


    public function show($id)
    {
    	return view('gastos.show');
    }
    
}
