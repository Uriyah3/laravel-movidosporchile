<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Catastrofe;
use App\Region;
use App\Provincia;
use App\Comuna;
use App\TipoCatastrofe;

class CatastrofeController extends Controller
{

    //mostrar todas las catastrofes
    public function index()
    {
        $catastrofes = Catastrofe::with('tipo_catastrofe', 'locacion.comuna')->orderBy('fecha_catastrofe', 'desc')->paginate(5);

    	return view('catastrofes.index',compact('catastrofes'));
    }

    //almacenar nueva catastrofe
    public function store()
    {
        $user = Auth::user();

        $this->validate(request(), [
            'tipo_catastrofe_id' => 'required',
            'locacion_id' => 'required',
            'descripcion' => 'required',
            'fecha_catastrofe' => 'required'
        ]);

       
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
        $regiones = Region::all();
        $provincias = Provincia::all();
        $comunas = Comuna::all();
        $tipoCatastrofes = TipoCatastrofe::all();

    	return view('catastrofes.create', compact('comunas', 'tipoCatastrofe'));
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
