@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="css/perfil.css">

@section('sidebar')
@include('layouts.sidebarUsuario')
@endsection

@section('content')
<div class="row">
	<div class="col">
		<h1 class="titulo">Donaciones Monetarias</h1>
	</div>
	@if(Auth::check() && Auth::user()->rol->nombre == "Organización")
	<div class="col">
		<a class="float-md-right btn btn-info" href="{{ url('donaciones/create') }}" role="button">Crear Medida Donación</a>
	</div>
	@endif
</div>

	<p>
		Movidos x Chile y sus Organizaciones se encuentran siempre disponibles para ir en apoyo hacia las personas damnificadas en las localidades más afectadas por las catástrofes, haciendo un llamado a a la solidaridad de todos los chilenos. <br />

		El llamado a la comunidad es urgente, las personas más afectadas nos necesitan unidos. Para financiar el apoyo a las familias, involúcrate a través de nuestra cuenta corriente del Banco BCI.
	</p>

	<br />

<dl>
	<dt>Nombre</dt>
	<dd>Movidos x Chile</dd>

	<dt>Cta corriente</dt>
	<dd>11475498</dd>

	<dt>Banco</dt>
	<dd>BCI</dd>
	
	<dt>Rut</dt>
	<dd>81 496.800-6 </dd>

	<dt>E-mail</dt>
	<dd>movidosxchile@mxc.cl</dd>
</dl>

<img class="bci" src="imagenes/bci.png">

@endsection