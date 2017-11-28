@extends('layouts.master')

@section('style')
{{ Html::style('css/perfil.css') }}
@endsection

@section('sidebar')
@include('layouts.sidebarUsuario')
@endsection

@section('content')
<h2>Evento a Beneficio</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<tbody>
			<tr>
				<td class="font-weight-bold">Descripción</td>
				<td>{{ $eventoABeneficio->medida->descripcion }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Objetivos</td>
				<td>{{ $eventoABeneficio->medida->objetivos }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Actividades</td>
				<td>{{ $eventoABeneficio->actividades }}</td>
			</tr>
			@if(Auth::check() && Auth::getUser()->rol != 'Usuario')
			<tr>
				<td class="font-weight-bold">Medida Aprobada</td>
				<td>{{ ($eventoABeneficio->medida->aprobada == false) ? 'No' : 'Si' }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Creador</td>
				<td>{{ $eventoABeneficio->medida->usuario->nombre }}</td>
			</tr>
			@endif
			<tr>
				<td class="font-weight-bold">Comuna</td>
				<td>{{ $eventoABeneficio->locacion->comuna->nombre }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Fecha</td>
				<td>{{ $eventoABeneficio->fecha }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Horario_inicio</td>
				<td>{{ $eventoABeneficio->horario_inicio }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Horario_termino</td>
				<td>{{ $eventoABeneficio->horario_termino }}</td>
			</tr>
			@if(Auth::check() && Auth::user()->rol->nombre != 'Usuario')
			<tr>
				<td class="font-weight-bold">Fecha Creación</td>
				<td>{{ $eventoABeneficio->created_at }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Fecha última modificación</td>
				<td>{{ $eventoABeneficio->updated_at }}</td>
			</tr>
			@endif
		</tbody>
	</table>
</div>

<br />

@includeWhen($eventoABeneficio->medida->comentario->count() > 0, 'comentarios.index', ['comentarios' => paginate($eventoABeneficio->medida->comentario->sortByDesc('created_at'))->withPath("/eventoABeneficios/{$eventoABeneficio->id}")])


@endsection