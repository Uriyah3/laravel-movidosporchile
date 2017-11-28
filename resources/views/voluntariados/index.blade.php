@extends('layouts.master')

@section('style')
{{ Html::style('css/perfil.css') }}
@endsection

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

<div class="registrado">
	<p>
		Si desea participar como voluntario en alguna de las actividades propuestas, es importante que se encuentre registrado dentro del sistema.
	</p>
</div>

<br />

<div class="table-responsive">
	<table id="mytable" class="table table-striped">
		<thead>
			<tr>
				@if(Auth::check() && Auth::user()->rol->nombre == "Gobierno")
					<th width="6%">Aprobada</th>
				@endif
				<th>Actividad</th>
				<th>Comuna</th>
				<th>Inicio</th>
				<th>Término</th>
				<th>Progreso</th>
				<th width="12%">Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($voluntariados as $voluntariado)
			@php ($progreso= $voluntariado->voluntario_count / $voluntariado->cantidad_voluntarios * 100.0)
			@if($progreso < 100.0 || (Auth::check() && Auth::user()->rol->nombre == "Gobierno"))
			<tr>
				@if(Auth::check() && Auth::user()->rol->nombre == "Gobierno")
					<td class="text-center">{{ $voluntariado->medida->aprobada == true ? "Si" : "No" }}</td>
				@endif
				<td class="text-center">{{ $voluntariado->actividad_voluntariado->nombre }}</td>
				<td class="text-center">{{ $voluntariado->locacion->comuna->nombre }}</td>
				<td class="text-center">{{ $voluntariado->fecha_inicio }}</td>
				<td class="text-center">{{ $voluntariado->fecha_termino }}</td>
				<td class="text-center">
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="{{ $progreso }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $progreso }}%"></div>
					</div>
				</td>
				<td class="text-center">
					<a class="btn octicon btn-info btn-xs" href="{{ url('voluntariados', $voluntariado->id) }}" role="button"><img class="octicon" src="{{ URL::asset('icons/file.svg') }}"></a>
					@if(Auth::check())
						@if(Auth::user()->rol->nombre == "Usuario")
							@if($voluntariado->voluntario->pluck('usuario_id')->contains(Auth::id()) )
								<button class="btn octicon btn-danger btn-xs" data-title="Desinscribirse" data-toggle="modal" data-target="#desinscribirse" data-url="{{ url("voluntariados/{$voluntariado->id}/voluntarios/{$voluntariado->voluntario->where('usuario_id', Auth::id())->first()->id}") }}"><img class="octicon" src="{{ URL::asset('icons/person.svg') }}"></button>
							@else
								<button class="btn octicon btn-success btn-xs" data-title="Inscribirse" data-toggle="modal" data-target="#inscribirse" data-url="{{ url("voluntariados/{$voluntariado->id}/voluntarios") }}"><img class="octicon" src="{{ URL::asset('icons/person.svg') }}"></button>
							@endif
						@endif
						@if(Auth::user()->rol->nombre == "Gobierno" || (Auth::user()->rol->nombre == "Organización" && Auth::id() == $voluntariado->medida->usuario_id))
							<a class="btn octicon btn-warning btn-xs" href="{{ url("voluntariados/{$voluntariado->id}/edit") }}"><img class="octicon" src="{{ URL::asset('icons/pencil.svg') }}"></a>
						@endif
						@if(Auth::user()->rol->nombre == "Gobierno")
							<button class="btn octicon btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-url="{{ url('voluntariados', $voluntariado->id) }}"><img class="octicon" src="{{ URL::asset('icons/trashcan.svg') }}"></button>
						@endif
					@endif
				</td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>
</div>
{{$voluntariados->links()}}

@if(Auth::check())
	@if(Auth::user()->rol->nombre == "Gobierno")
	<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="delete">¿Borrar este voluntariado?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="alert alert-danger"><img class="octicon" src="{{ URL::asset('icons/alert.svg') }}" width="24px"> ¿Estás seguro que deseas eliminar esta medida?</div>

				</div>
				<div class="modal-footer">
					<form id="deleteForm" method="POST" style="margin-bottom: 0em">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="DELETE">
						<div class="form-group">
							<button type="submit" class="btn btn-success" ><img class="octicon" src="{{ URL::asset('icons/check.svg') }}" height="18px"> Si</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal"><img class="octicon" src="{{ URL::asset('icons/x.svg') }}" height="18px"> No</button>
						</div>
					</form>

				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	@endif
	@if(Auth::user()->rol->nombre == "Usuario")
	<div class="modal fade" id="inscribirse" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="inscribirse">Confimar participación</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="alert alert-success"><img class="octicon" src="{{ URL::asset('icons/person.svg') }}" width="24px"> Confirme su inscripción en este voluntariado.</div>

				</div>
				<div class="modal-footer">
					<form id="inscribirseForm" method="POST" style="margin-bottom: 0em">
						{{ csrf_field() }}
						<div class="form-group">
							<button type="submit" class="btn btn-success" ><img class="octicon" src="{{ URL::asset('icons/check.svg') }}" height="18px"> Participar</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal"><img class="octicon" src="{{ URL::asset('icons/x.svg') }}" height="18px"> Cancelar</button>
						</div>
					</form>

				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<div class="modal fade" id="desinscribirse" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="desinscribirse">Cancelar inscripción</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="alert alert-danger"><img class="octicon" src="{{ URL::asset('icons/alert.svg') }}" width="24px"> ¿Está seguro que desea cancelar su inscripción?</div>

				</div>
				<div class="modal-footer">
					<form id="desinscribirseForm" method="POST" style="margin-bottom: 0em">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="DELETE">
						<div class="form-group">
							<button type="submit" class="btn btn-success" ><img class="octicon" src="{{ URL::asset('icons/check.svg') }}" height="18px"> Desinscribirse</button>
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
@endif
@endsection

@if(Auth::check())
	@section('scripts')
	@if(Auth::user()->rol->nombre == "Gobierno")
		<script type="text/javascript">
			$(function() {
				$('#delete').on("show.bs.modal", function (e) {
					$("#deleteLabel").html($(e.relatedTarget).data('title'));
					$("#deleteForm").attr('action', ($(e.relatedTarget).data('url')));
				});
			});
		</script>
	@endif
	@if(Auth::user()->rol->nombre == "Usuario")
		<script type="text/javascript">
			$(function() {
				$('#inscribirse').on("show.bs.modal", function (e) {
					$("#inscribirseLabel").html($(e.relatedTarget).data('title'));
					$("#inscribirseForm").attr('action', ($(e.relatedTarget).data('url')));
				});
			});
			$(function() {
				$('#desinscribirse').on("show.bs.modal", function (e) {
					$("#desinscribirseLabel").html($(e.relatedTarget).data('title'));
					$("#desinscribirseForm").attr('action', ($(e.relatedTarget).data('url')));
				});
			});
		</script>
	@endif
	@endsection
@endif