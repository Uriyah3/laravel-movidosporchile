@extends('layouts.master')

@section('sidebar')
@include('layouts.sidebarUsuario')
@endsection

@section('content')
<h2>Evento a Beneficio</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Comuna</th>
				<th>Fecha</th>
				<th>Hora Inicio</th>
				<th>Hora Termino</th>
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