<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepositoController extends Controller
{
    
    public function store()
    {
    	return view('depositos.store');
    }


    public function index()
    {
    	return view('depositos.index');
    }



    public function create()
    {
    	return view('depositos.create');
    }
    
}
