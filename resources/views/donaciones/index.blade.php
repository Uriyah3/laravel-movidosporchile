@extends('layouts.master')


@section('sidebar')
    @include('layouts.sidebarUsuario')
@endsection

@section('content')
	
	<h1>Donaciones</h1>
	<!--
	<form action="/donacion.create">
		  Monto:<br>
		  <input type="text" name="monto" ><br><br>
		  <input type="submit">
	</form>-->

	<p>
		Movidos x Chile y sus Organizaciones se encuentran siempre disponibles para ir en apoyo hacia las personas damnificadas en las localidades más afectadas por las catástrofes, haciendo un llamado a a la solidaridad de todos los chilenos. <br />

		El llamado a la comunidad es urgente, las personas más afectadas nos necesitan unidos. Para financiar el apoyo a las familias, involúcrate a través de nuestra cuenta corriente del Banco BCI.
	</p>

	<br />
	<p class="cuenta">
			Nombre: Movidos x Chile <br />
			Cta corriente: 11475498 <br />
			Banco: BCI <br />
			Rut: 81 496.800-6 <br />
			Correo: movidosxchile@mxc.cl 
	</p>
	
	<br />
	<br />
	
@endsection