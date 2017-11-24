<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienController extends Controller
{
	public function create(){
		return view('bienes.create');
	}

    public function store()
    {
    	return view('bienes.store');
    }

    public function index()
    {
    	return view('bienes.index');
    }

}
