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
		<h1 class="titulo">Evento a Beneficio</h1>
	</div>
	@if(Auth::check() && Auth::user()->rol->nombre == "Organización")
	<div class="col">
		<a class="float-md-right btn btn-info" href="{{ url('eventos_a_beneficio/create') }}" role="button">Crear Evento A Beneficio</a>
	</div>
	@endif
</div>

<p>
	Movidos x Chile y sus Organizaciones planifican diversos eventos a beneficios para la recaudación de fondos. A continuación, se hace entrega de las localizaciones de estos lugares con sus respectivas actividades y fecha a realizar.
</p>
<br />

<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				@if(Auth::check() && Auth::user()->rol->nombre == "Gobierno")
					<th width="6%">Aprobada</th>
				@endif
				<th>Comuna</th>
				<th>Fecha</th>
				<th>Hora Inicio</th>
				<th>Hora Término</th>
				<th>Actividades</th>
				<th width="12%">Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($eventoAbeneficios as $evento)
			<tr>
				@if(Auth::check() && Auth::user()->rol->nombre == "Gobierno")
					<td class="text-center">{{ $evento->medida->aprobada == true ? "Si" : "No" }}</td>
				@endif
				<td class="text-center">{{ $evento->locacion->comuna->nombre }}</td>
				<td class="text-center">{{ $evento->fecha }}</td>
				<td class="text-center">{{ $evento->horario_inicio }}</td>
				<td class="text-center">{{ $evento->horario_termino }}</td>
				<td class="text-center">{{ $evento->actividades }}</td>
				<td class="text-center">
					<a class="btn octicon btn-info btn-xs" href="{{ url('eventos_a_beneficio', $evento->id) }}" role="button"><img class="octicon" src="{{ URL::asset('icons/file.svg') }}"></a>
					@if(Auth::check())
						@if(Auth::user()->rol->nombre == "Gobierno" || (Auth::user()->rol->nombre == "Organización" && Auth::id() == $evento->medida->usuario_id))
							<a class="btn octicon btn-warning btn-xs" href="{{ url("eventos_a_beneficio/{$evento->id}/edit") }}"><img class="octicon" src="{{ URL::asset('icons/pencil.svg') }}"></a>
						@endif
						@if(Auth::user()->rol->nombre == "Gobierno")
							<button class="btn octicon btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-url="{{ url('eventos_a_beneficio', $evento->id) }}"><img class="octicon" src="{{ URL::asset('icons/trashcan.svg') }}"></button>
						@endif
					@endif
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
{{$eventoAbeneficios->links()}}

@if(Auth::check())
	@if(Auth::user()->rol->nombre == "Gobierno")
	<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="delete">¿Borrar este evento a a beneficio?</h5>
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
	@endsection
@endif