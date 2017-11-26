@extends('layouts.master')

@section('sidebar')
@include('layouts.sidebarUsuario')
@endsection

@section('content')
<h2>Voluntariados</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Actividad</th>
				<th>Comuna</th>
				<th>Inicio</th>
				<th>Termino</th>
				<th>Progreso</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($voluntariados as $voluntariado)
			@php ($progreso= $voluntariado->voluntario_count / $voluntariado->cantidad_voluntarios * 100.0)
			@if($progreso < 100.0)
			<tr>
				<td>{{ $voluntariado->actividad_voluntariado->nombre }}</td>
				<td>{{ $voluntariado->locacion->comuna->nombre }}</td>
				<td>{{ $voluntariado->fecha_inicio }}</td>
				<td>{{ $voluntariado->fecha_termino }}</td>
				<td>
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="{{ $progreso }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $progreso }}%"></div>
					</div>
				</td>
				<td>Información Participar</td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>
</div>
{{$voluntariados->links()}}
@endsection