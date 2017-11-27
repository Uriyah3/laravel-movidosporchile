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
    public function store(Request $request)
    {
        

         $this->validate(request(), [
             'medida_id' => 'required',
            'descripcion' => 'required|string',
            ]);

         $user = Auth::user();

         $request['usuario_id'] = $user['id'];
         $request['medida_id'] = Medida::create(request(['usuario_id', 'objetivos', 'descripcion']))->id;
         
         Comentario::create(request(['medida_id','usuario_id','descripcion']));


         return redirect( url('comentarios'));

    }


    //mostrar todos los comentarios
    public function index($id)
    {
        
        $comentarios = Comentario::where('medida_id','=',$id)->orderBy('created_at')->paginate(10);

    	return view('comentarios.index',compact('comentarios'));
    }


    //mostrar el formulario apra editar un comentario
    public function edit($id)
    {
        $comentario = Comentario::find($id);

    	return view('comentarios.edit',compact('comentario'));
    }

    //mostrar el formulario para crear un nuevo comentario
    public function create()
    {
        $medidas = Medida::all();
        $user = Auth::user();

    	return view('comentarios.create',compact('medidas','user'));
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
