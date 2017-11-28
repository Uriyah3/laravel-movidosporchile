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
		<h1 class="titulo">Centros de Acopio</h1>
	</div>
	@if(Auth::check() && Auth::user()->rol->nombre == "Organización")
	<div class="col">
		<a class="float-md-right btn btn-info" href="{{ url('centros_de_acopio/create') }}" role="button">Añadir Centro de Acopio</a>
	</div>
	@endif
</div>

<p>
	Movidos x Chile cuenta con centros de acopio distribuidos a lo largo del pais, con el fin de canalizar una variedad de elementos de forma organizada. Para facilitar la recaudación, se hace entrega de las localizaciones de estos lugares con su respectivos estados y bienes faltantes.
</p>

<br />

<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				@if(Auth::check() && Auth::user()->rol->nombre == "Gobierno")
				<th width="6%">Aprobada</th>
				@endif
				<th>Estado</th>
				<th>Comuna</th>
				<th>Fecha Inicio</th>
				<th>Fecha Término</th>
				<th width="12%">Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($centrosDeAcopio as $centro)
			<tr>
				@if(Auth::check() && Auth::user()->rol->nombre == "Gobierno")
				<td class="text-center">{{ $centro->medida->aprobada == true ? "Si" : "No" }}</td>
				@endif
				<td class="text-center">{{ $centro->estado->nombre }}</td>
				<td class="text-center">{{ $centro->locacion->comuna->nombre }}</td>
				<td class="text-center">{{ $centro->fecha_inicio }}</td>
				<td class="text-center">{{ $centro->fecha_termino }}</td>
				<td class="text-center">
					<a class="btn octicon btn-info btn-xs" href="{{ url('centros_de_acopio', $centro->id) }}" role="button"><img class="octicon" src="{{ URL::asset('icons/file.svg') }}"></a>
					@if(Auth::check())
					@if(Auth::user()->rol->nombre == "Usuario")
					<button class="btn octicon btn-success btn-xs" data-title="Inscribirse" data-toggle="modal" data-target="#donar" data-url="{{ url("centros_de_acopio/{$centro->id}/bienes") }}"><img class="octicon" src="{{ URL::asset('icons/package.svg') }}"></button>
					@endif
					@if(Auth::user()->rol->nombre == "Gobierno" || (Auth::user()->rol->nombre == "Organización" && Auth::id() == $centro->medida->usuario_id))
					<a class="btn octicon btn-warning btn-xs" href="{{ url("centros_de_acopio/{$centro->id}/edit") }}"><img class="octicon" src="{{ URL::asset('icons/pencil.svg') }}"></a>
					@endif
					@if(Auth::user()->rol->nombre == "Gobierno")
					<button class="btn octicon btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-url="{{ url('centros_de_acopio', $centro->id) }}"><img class="octicon" src="{{ URL::asset('icons/trashcan.svg') }}"></button>
					@endif
					@endif
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
{{$centrosDeAcopio->links()}}

@if(Auth::check())
@if(Auth::user()->rol->nombre == "Gobierno")
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="delete">¿Borrar este Centro de acopio?</h5>
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
<div class="modal fade" id="donar" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="donar">Confimar participación</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="donarForm" method="POST" style="margin-bottom: 0em">
				{{ csrf_field() }}
				<div class="modal-body">
					<div class="form-group">
						<label for="tipo">Nombre del bien:</label>
						<input type="text" class="form-control" id="tipo" name="tipo" required>
					</div>
					<div class="form-row">
						<div class="col">
							<div class="form-group">
								<label for="cantidad">Unidades:</label>
								<input type="text" class="form-control" id="cantidad" name="cantidad" required>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="medicion_id">Medicion:</label>
								<select class="form-control" name="medicion_id" required>
									@foreach($mediciones as $medicion)
									<option value="{{$medicion->id}}">{{$medicion->nombre}}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="form-group">
						<button type="submit" class="btn btn-success" ><img class="octicon" src="{{ URL::asset('icons/check.svg') }}" height="18px"> Donar</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal"><img class="octicon" src="{{ URL::asset('icons/x.svg') }}" height="18px"> Cancelar</button>
					</div>
				</div>
			</form>
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
		$('#donar').on("show.bs.modal", function (e) {
			$("#donarLabel").html($(e.relatedTarget).data('title'));
			$("#donarForm").attr('action', ($(e.relatedTarget).data('url')));
		});
	});
</script>
@endif
@endsection
@endif