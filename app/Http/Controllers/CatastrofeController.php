<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatastrofeController extends Controller
{
	
    public function index()
    {
    	return view('catastrofesindex');
    }


    public function store()
    {
    	return view('catastrofesstore');
    }


    public function create()
    {
    	return view('catastrofescreate');
    }


    public function show($id)	
    {
    	return view('catastrofesshow');
    }


    public function delete($id)
    {
    	return view('catastrofesdelete');
    }

}
