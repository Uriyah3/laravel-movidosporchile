<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Catastrofe;

class CatastrofeController extends Controller
{

    //mostrar todas las catastrofes
    public function index()
    {
        $catastrofes = Catastrofe::all();

    	return view('catastrofes.index',compact('catastrofes'));
    }


    //almacenar nueva catastrofe
    public function store()
    {
        

        $catastrofe = Catastrofe::create(
            request(['usuario_id','tipo_catastrofe_id','locacion_id','descripcion','fecha_catastrofe']));

        if($catastrofe-> save()){
            return view('catastrofes.index');
        }

    	return view('catastrofes.store');
    }


    //muestra la vista para crear catastrofe
    public function create()
    {
    	return view('catastrofes.create');
    }


    //mostrar una catastrofe
    public function show($id)
    {
        $catastrofe = Catastrofe::find($id);

    	return view('catastrofes.show',compact('catastrofe'));
    }


    //eliminar una catastrofe
    public function delete($id)
    {
        Catastrofe::destroy($id);

        $request->session()->flash('status','Catastrofe eliminada.');

    	return view('catastrofes.delete');
    }

}
