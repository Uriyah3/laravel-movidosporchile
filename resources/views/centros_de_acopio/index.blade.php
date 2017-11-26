@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="css/perfil.css"> 

@section('sidebar')
@include('layouts.sidebarUsuario')
@endsection

@section('content')
<h1 class="titulo">Centros de Acopio</h1>

<p>
	Movidos x Chile cuenta con centros de acopio distribuidos a lo largo del pais, con el fin de canalizar una variedad de elementos de forma organizada. Para facilitar la recaudación, se hace entrega de las localizaciones de estos lugares con su respectivos estados y bienes faltantes.
</p>

<br />

<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Estado</th>
				<th>Comuna</th>
				<th>Fecha Inicio</th>
				<th>Fecha Término</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($centrosDeAcopio as $centro)
			<tr>
				<td>{{ $centro->estado->nombre }}</td>
				<td>{{ $centro->locacion->comuna->nombre }}</td>
				<td>{{ $centro->fecha_inicio }}</td>
				<td>{{ $centro->fecha_termino }}</td>
				<td>Información Participar</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
{{$centrosDeAcopio->links()}}
@endsection