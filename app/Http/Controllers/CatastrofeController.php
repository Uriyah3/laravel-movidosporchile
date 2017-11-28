<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; 
use App\Catastrofe;
use App\Locacion;
use App\Region;
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
    public function store(Request $request)
    {
        $this->validate(request(), [
            'tipo_catastrofe_id' => 'required',
            'descripcion' => 'required',
            'fecha_catastrofe' => 'required'
        ]);

        $user = Auth::user();
        $request['locacion_id'] = factory(Locacion::class)->create(['comuna_id' => $request['comuna_id']])->id;
        $request['usuario_id'] = $user['id'];

        $catastrofe = Catastrofe::create(
            request(['usuario_id','tipo_catastrofe_id','locacion_id','descripcion','fecha_catastrofe']));
        

           $catastrofe->notify(new PostCatastrofe());
        
        if($catastrofe->save()){
            return redirect( url('catastrofes') );
        }

    	return redirect( url('catastrofes/create') );
    }


    //muestra la vista para crear catastrofe
    public function create()
    {
        $regiones = Region::all();
        $tipoCatastrofes = TipoCatastrofe::all();

    	return view('catastrofes.create', compact('regiones', 'tipoCatastrofes'));
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

        $request->session()->flash('status','Catástrofe eliminada.');

    	return view('catastrofes.delete');
    }

}
