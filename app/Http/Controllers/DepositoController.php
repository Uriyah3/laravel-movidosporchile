<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Deposito;
use App\Donacion;
use Illuminate\Http\Request;

class DepositoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Donacion  $donacion
     * @return \Illuminate\Http\Response
     */
    public function index($donacionId)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Donacion  $donacion
     * @return \Illuminate\Http\Response
     */
    public function create($donacionId)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donacion  $donacion
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $donacionId)
    {
        $this->validate(request(), [
            'monto' => 'required|numeric',
        ]);
        $request['usuario_id'] = Auth::id();
        $request['donacion_id'] = $donacionId;
        $request['fecha'] = Carbon::now('America/Santiago');

        Deposito::create(request(['usuario_id', 'donacion_id', 'fecha', 'monto']));

        return redirect( url('donaciones', $donacionId) );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donacion  $donacion
     * @param  \App\Deposito  $deposito
     * @return \Illuminate\Http\Response
     */
    public function show($donacionId, Deposito $deposito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donacion  $donacion
     * @param  \App\Deposito  $deposito
     * @return \Illuminate\Http\Response
     */
    public function edit($donacionId, Deposito $deposito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donacion  $donacion
     * @param  \App\Deposito  $deposito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $donacionId, Deposito $deposito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donacion  $donacion
     * @param  \App\Deposito  $deposito
     * @return \Illuminate\Http\Response
     */
    public function destroy($donacionId, Deposito $deposito)
    {
        //
    }
}
