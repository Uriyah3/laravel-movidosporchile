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
		<h1 class="titulo">Donaciones Monetarias</h1>
	</div>
	@if(Auth::check() && Auth::user()->rol->nombre == "Organización")
	<div class="col">
		<a class="float-md-right btn btn-info" href="{{ url('donaciones/create') }}" role="button">Crear Medida Donación</a>
	</div>
	@endif
</div>

<p>
	Movidos x Chile y sus Organizaciones se encuentran siempre disponibles para ir en apoyo hacia las personas damnificadas en las localidades más afectadas por las catástrofes, haciendo un llamado a a la solidaridad de todos los chilenos. <br />

	El llamado a la comunidad es urgente, las personas más afectadas nos necesitan unidos. Para financiar el apoyo a las familias, involúcrate a través de nuestra cuenta corriente del Banco BCI.
</p>

	<br />

<div class="row">
	<div class="col-md-2">


<dl>
	<dt>Nombre</dt>
	<dd>Movidos x Chile</dd>

	<dt>Cta corriente</dt>
	<dd>11475498</dd>

	<dt>Banco</dt>
	<dd>BCI</dd>

	<dt>Rut</dt>
	<dd>81 496.800-6 </dd>

	<dt>E-mail</dt>
	<dd>movidosxchile@mxc.cl</dd>
</dl>
</div>

	<div class="col-md-10">
<img class="bci" src="imagenes/bci.png">
</div>
</div>

<br />
<h2 class="subtitulo">Aportes monetarios</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				@if(Auth::check() && Auth::user()->rol->nombre == "Gobierno")
					<th width="6%">Aprobada</th>
				@endif
				<th>Titular</th>
				<th>Nombre Banco</th>
				<th>Fecha Inicio</th>
				<th>Fecha Término</th>
				<th width="12%">Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($donaciones as $donacion)
			<tr>
				@if(Auth::check() && Auth::user()->rol->nombre == "Gobierno")
				<td class="text-center">{{ $donacion->medida->aprobada == true ? "Si" : "No" }}</td>
				@endif
				<td class="text-center">{{ $donacion->titular }}</td>
				<td class="text-center">{{ $donacion->nombre_banco }}</td>
				<td class="text-center">{{ $donacion->fecha_inicio }}</td>
				<td class="text-center">{{ $donacion->fecha_termino }}</td>
				<td class="text-center">
					<a class="btn octicon btn-info btn-xs" href="{{ url('donaciones', $donacion->id) }}" role="button"><img class="octicon" src="{{ URL::asset('icons/file.svg') }}"></a>
					@if(Auth::check())
						@if(Auth::user()->rol->nombre == "Usuario")
							<button class="btn octicon btn-success btn-xs" data-title="Donar" data-toggle="modal" data-target="#donar" data-url="{{ url("donaciones/{$donacion->id}/depositos") }}"><img class="octicon" src="{{ URL::asset('icons/credit-card.svg') }}"></button>
						@endif
						@if(Auth::user()->rol->nombre == "Gobierno" || (Auth::user()->rol->nombre == "Organización" && Auth::id() == $donacion->medida->usuario_id))
							<a class="btn octicon btn-warning btn-xs" href="{{ url("donaciones/{$donacion->id}/edit") }}"><img class="octicon" src="{{ URL::asset('icons/pencil.svg') }}"></a>
						@endif
						@if(Auth::user()->rol->nombre == "Gobierno")
							<button class="btn octicon btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-url="{{ url('donaciones', $donacion->id) }}"><img class="octicon" src="{{ URL::asset('icons/trashcan.svg') }}"></button>
						@endif
					@endif
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
{{$donaciones->links()}}


@if(Auth::check())
	@if(Auth::user()->rol->nombre == "Gobierno")
	<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="delete">¿Borrar esta medida de Donación?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="alert alert-danger"><img class="octicon" src="{{ URL::asset('icons/alert.svg') }}" width="24px"> ¿Estás seguro que deseas eliminar esta medida?</div>
>>>>>>> 9847c1c8d1ad26c969ddd6d2920c49e59b2b3959

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
					<h5 class="modal-title" id="donar">Aporte monetario</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form id="donarForm" method="POST" style="margin-bottom: 0em">
					{{ csrf_field() }}
					<div class="modal-body">
						<div class="form-group">
							<label for="monto">Monto:</label>
							<input type="numeric" class="form-control" id="monto" name="monto" required>
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
