<?php

namespace App\Http\Controllers;

use Auth;
use App\Comentario;
use App\Voluntariado;
use Illuminate\Http\Request;

class ComentarioVoluntariadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Voluntariado  $voluntariado
     * @return \Illuminate\Http\Response
     */
    public function index(Voluntariado $voluntariado)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Voluntariado  $voluntariado
     * @return \Illuminate\Http\Response
     */
    public function create(Voluntariado $voluntariado)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voluntariado  $voluntariado
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Voluntariado $voluntariado)
    {
        $this->validate(request(), [
            'descripcion' => 'required|string',
        ]);

        $request['usuario_id'] = Auth::id();
        $request['medida_id'] = $voluntariado->medida->id;

        Comentario::create(request(['medida_id','usuario_id','descripcion']));
        return redirect( url()->previous() );
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Voluntariado  $voluntariado
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(Voluntariado $voluntariado, Comentario $comentario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voluntariado  $voluntariado
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(Voluntariado $voluntariado, Comentario $comentario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voluntariado  $voluntariado
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voluntariado $voluntariado, Comentario $comentario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voluntariado  $voluntariado
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voluntariado $voluntariado, Comentario $comentario)
    {
         $comentario->delete();
        return redirect( url()->previous());
    }
}
