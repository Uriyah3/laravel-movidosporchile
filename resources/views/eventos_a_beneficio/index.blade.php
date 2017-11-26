@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="css/perfil.css"> 

@section('sidebar')
@include('layouts.sidebarUsuario')
@endsection

@section('content')
<h1 class="titulo">Evento a Beneficio</h1>

<p>
	Movidos x Chile y sus Organizaciones planifican diversos eventos a beneficios para la recaudación de fondos. A continuación, se hace entrega de las localizaciones de estos lugares con sus respectivas actividades y fecha a realizar.
</p>
<br />

<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Comuna</th>
				<th>Fecha</th>
				<th>Hora Inicio</th>
				<th>Hora Término</th>
				<th>Actividades</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($eventoAbeneficios as $eventoAbeneficio)
			<tr>
				<td>{{ $eventoAbeneficio->locacion->comuna->nombre }}</td>
				<td>{{ $eventoAbeneficio->fecha }}</td>
				<td>{{ $eventoAbeneficio->horario_inicio }}</td>
				<td>{{ $eventoAbeneficio->horario_termino }}</td>
				<td>{{ $eventoAbeneficio->actividades }}</td>
				<td>Información Participar</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
{{$eventoAbeneficios->links()}}
@endsection