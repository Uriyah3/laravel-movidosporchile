@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="css/perfil.css"> 

@section('sidebar')
@include('layouts.sidebarUsuario')
@endsection

@section('content')

	<h1 class="Titulo">Donaciones Monetarias</h1>
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

<h2 class="titulo">Aportes monetarios</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Titular</th>
				<th>Nombre Banco</th>
				<th>Fecha Inicio</th>
				<th>Fecha Término</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($donaciones as $donacion)
			<tr>
				<td>{{ $donacion->titular }}</td>
				<td>{{ $donacion->nombre_banco }}</td>
				<td>{{ $donacion->fecha_inicio }}</td>
				<td>{{ $donacion->fecha_termino }}</td>
				<td>Información Participar</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
{{$donaciones->links()}}
@endsection