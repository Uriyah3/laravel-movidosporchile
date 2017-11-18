<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    
    public function store()
    {
    	return view('comentarios.store');
    }


    public function index()
    {
    	return view('comentarios.index');
    }


    public function edit($id)
    {
    	return view('comentarios.edit');
    }


    public function create()
    {
    	return view('comentarios.create');
    }


    public function update($id)
    {
    	return view('comentarios.update');
    }


    public function delete($id)
    {
    	return view('comentarios.delete');
    }
    
}
