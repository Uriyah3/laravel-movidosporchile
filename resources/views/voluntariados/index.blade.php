@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="css/perfil.css">

@section('sidebar')
@include('layouts.sidebarUsuario')
@endsection

@section('content')
<div class="row">
	<div class="col">
		<h1 class="titulo">Voluntariados</h1>
	</div>
	@if(Auth::check() && Auth::user()->rol->nombre == "Organización")
	<div class="col">
		<a class="float-md-right btn btn-info" href="{{ url('voluntariados/create') }}" role="button">Crear Voluntariado</a>
	</div>
	@endif
</div>
<p>
	Movidos x Chile solicita la ayuda de una cantidad de personas para realizar una serie de trabajos, los cuales se encuentran detallados a continuación, con su respectivo progreso.
</p>

<br />

<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Actividad</th>
				<th>Comuna</th>
				<th>Inicio</th>
				<th>Término</th>
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