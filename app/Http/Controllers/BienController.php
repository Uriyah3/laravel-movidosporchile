<?php

namespace App\Http\Controllers;

use Auth;
use App\Bien;
use App\CentroAcopio;
use App\Medicion;
use Illuminate\Http\Request;


class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\CentroAcopio  $centroAcopio
     * @return \Illuminate\Http\Response
     */
    public function index($centroAcopioId)
    {
        $bien = Bien::all();

        return view('bienes.index',compact('bien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\CentroAcopio  $centroAcopio
     * @return \Illuminate\Http\Response
     */
    public function create($centroAcopioId)
    {
        $centroAcopio = CentroAcopio::all();
        $medicion = Medicion::all();
        $bien  = Bien::all();

        return view('bienes.create',compact('centroAcopio','medicion','bien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CentroAcopio  $centroAcopio
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $centroAcopioId)
    {
        $this->validate(request(), [
            'medicion_id' => 'required|numeric',
            'tipo' => 'required|string',
            'cantidad' => 'required|numeric'
        ]);

        $request['usuario_id'] = Auth::id();
        $request['centro_acopio_id'] = $centroAcopioId;

        Bien::create(request(['usuario_id','centro_acopio_id','medicion_id','tipo','cantidad']));

        return redirect(url('centros_de_acopio', $centroAcopioId));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CentroAcopio  $centroAcopio
     * @param  \App\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function show($centroAcopioId, $bienId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CentroAcopio  $centroAcopio
     * @param  \App\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function edit($centroAcopioId, $bienId)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CentroAcopio  $centroAcopio
     * @param  \App\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $centroAcopioId, $bienId)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CentroAcopio  $centroAcopio
     * @param  \App\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function destroy($centroAcopioId, $bienId)
    {
        //
    }
}
