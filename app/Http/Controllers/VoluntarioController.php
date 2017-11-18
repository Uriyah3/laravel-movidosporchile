<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoluntarioController extends Controller
{
    
    public function store()
    {
    	return view('voluntarios.store');
    }


    public function index()
    {
    	return view('voluntarios.index');
    }


    public function edit($id)
    {
    	return view('voluntarios.edit');
    }


    public function show($id)
    {
    	return view('voluntarios.show');
    }


    public function update($id)
    {
    	return view('voluntarios.update');
    }


    public function delete($id)
    {
    	return view('voluntarios.delete');
    }

}
