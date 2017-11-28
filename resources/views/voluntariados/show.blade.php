@extends('layouts.master')

@section('style')
{{ Html::style('css/perfil.css') }}
@endsection

@section('sidebar')
@include('layouts.sidebarUsuario')
@endsection

@section('content')
<h2>Voluntariado</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<tbody>
			<tr>
				<td class="font-weight-bold">Descripción</td>
				<td>{{ $voluntariado->medida->descripcion }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Objetivos</td>
				<td>{{ $voluntariado->medida->objetivos }}</td>
			</tr>
			@if(Auth::check() && Auth::getUser()->rol != 'Usuario')
			<tr>
				<td class="font-weight-bold">Medida Aprobada</td>
				<td>{{ ($voluntariado->medida->aprobada == false) ? 'No' : 'Si' }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Creador</td>
				<td>{{ $voluntariado->medida->usuario->nombre }}</td>
			</tr>
			@endif
			<tr>
				<td class="font-weight-bold">Comuna</td>
				<td>{{ $voluntariado->locacion->comuna->nombre }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Actividad</td>
				<td>{{ $voluntariado->actividad_voluntariado->nombre }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Fecha Inicio</td>
				<td>{{ $voluntariado->fecha_inicio }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Fecha termino</td>
				<td>{{ $voluntariado->fecha_termino }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Meta voluntarios</td>
				<td>{{ $voluntariado->cantidad_voluntarios }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Voluntarios inscritos</td>
				<td>{{ $voluntariado->voluntario_count }}</td>
			</tr>
			@if(Auth::check() && Auth::user()->rol->nombre != 'Usuario')
			<tr>
				<td class="font-weight-bold">Fecha Creación</td>
				<td>{{ $voluntariado->created_at }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Fecha última modificación</td>
				<td>{{ $voluntariado->updated_at }}</td>
			</tr>
			@endif
		</tbody>
	</table>
</div>

@if($voluntariado->voluntario_count > 0)
<h3>Voluntarios inscritos</h3>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				@if(Auth::check() && Auth::user()->rol->nombre == "Organización")
				<th width="5%">Finalizar</th>
				@endif
				<th>¿Finalizado?</th>
				<th>Nombre</th>
				<th>E-mail</th>
				<th>Fecha inscripción</th>
			</tr>
		</thead>
		<tbody>
			@foreach($voluntariado->voluntario as $voluntario)
			<tr>
				@if(Auth::check() && Auth::user()->rol->nombre == "Organización")
				<td class="text-center">
					@if($voluntario->finalizado == false)
					<button class="btn octicon btn-success btn-xs" data-title="Finalizar" data-toggle="modal" data-target="#finalizar" data-url="{{ url("voluntariados/{$voluntariado->id}/voluntarios/{$voluntario->id}") }}"><img class="octicon" src="{{ URL::asset('icons/check.svg') }}"></button>
					@endif
				</td>
				@endif
				<td class="text-center">{{$voluntario->finalizado == true ? "Si" : "No"}}</td>
				<td class="text-center">{{$voluntario->usuario->nombre}}</td>
				<td class="text-center">{{$voluntario->usuario->email}}</td>
				<td class="text-center">{{$voluntario->created_at}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endif

<br />

@includeWhen($voluntariado->medida->comentario->count() > 0, 'comentarios.index', ['comentarios' => paginate($voluntariado->medida->comentario->sortByDesc('created_at'))->withPath("/voluntariados/{$voluntariado->id}")])


@if(Auth::check() && Auth::user()->rol->nombre == "Organización")
<div class="modal fade" id="finalizar" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="finalizar">Finalizar participación</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="alert alert-success"><img class="octicon" src="{{ URL::asset('icons/person.svg') }}" width="24px"> Confirme que este usuario ha finalizado su tarea.</div>

			</div>
			<div class="modal-footer">
				<form id="finalizarForm" method="POST" style="margin-bottom: 0em">
					{{ csrf_field() }}
					{{ method_field('PATCH') }}
					<div class="form-group">
						<button type="submit" class="btn btn-success" ><img class="octicon" src="{{ URL::asset('icons/check.svg') }}" height="18px"> Finalizar</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal"><img class="octicon" src="{{ URL::asset('icons/x.svg') }}" height="18px"> Cancelar</button>
					</div>
				</form>

			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
@endif

@endsection

@if(Auth::check() && Auth::user()->rol->nombre == "Organización")
@section('scripts')
<script type="text/javascript">
	$(function() {
		$('#finalizar').on("show.bs.modal", function (e) {
			$("#finalizarLabel").html($(e.relatedTarget).data('title'));
			$("#finalizarForm").attr('action', ($(e.relatedTarget).data('url')));
		});
	});
</script>
@endsection
@endif