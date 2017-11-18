<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatastrofeController extends Controller
{
	
    public function index()
    {
    	return view('catastrofes.index');
    }


    public function store()
    {
    	return view('catastrofes.store');
    }


    public function create()
    {
    	return view('catastrofes.create');
    }


    public function show($id)	
    {
    	return view('catastrofes.show');
    }


    public function delete($id)
    {
    	return view('catastrofes.delete');
    }

}
