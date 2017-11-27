<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use App\Comentario;
use App\Medida;
use App\Usuario;

class ComentarioController extends Controller
{

    //mostrar un nuevo registro de comentario
    public function store()
    {
        $id = Auth::id();

         $this->validate(request(), [
            'medida_id' => 'required',
            'descripcion' => 'required',
            'created_at' => 'required'
        ]);

         $comentario = Comentario::create(request(['medida_id','usuario_id','descripcion','created_at','modified_at']));

         if($comentario-> save()){
            return view('comentarios.store');
        }

    	return view('comentarios.store');
    }


    //mostrar todos los comentarios
    public function index()
    {
        $comentario = Comentario::with('medida', 'usuario','descripcion','created_at')->groupBy('medida')->paginate(5);

    	return view('comentarios.index',compact('comentario'));
    }


    //mostrar el formulario apra editar un comentario
    public function edit($id)
    {
        $comentario = Comentario::find($id);

    	return view('comentarios.edit',compact('comentario'));
    }

    //mostrar el formulario para crear un nuevo comentaio
    public function create()
    {
        $medidas = Medida::all();
        $usuarios = Usuario::all();
    	return view('comentarios.create',compact('medidas','usuarios'));
    }

   //actualizar un comentario en el almacenamiento
    public function update(Request $request, $id)
    {
        $comentario = Comentario::find($id);
        $comentario->descripcion = $request->descripcion;
        $comentario->created_at  = $Request->created_at;
        $comentario->save();
        $request->session()->flash('status','Comentario actualizado correctamente.');
    	return view('comentarios.update');
    }

    //elimina comentario en el almacenamiento
    public function delete($id)
    {
        Comentario::destroy($id);

        $request->session()->flash('status','Comentario eliminado.');

    	return view('comentarios.delete');
    }
    
}
