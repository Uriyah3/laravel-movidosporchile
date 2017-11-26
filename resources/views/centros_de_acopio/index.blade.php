@extends('layouts.master')

@section('sidebar')
@include('layouts.sidebarUsuario')
@endsection

@section('content')
<h2>Centros de acopio</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Estado</th>
				<th>Comuna</th>
				<th>Fecha Inicio</th>
				<th>Fecha Termino</th>
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