<div class="form-row">
	<div class="col">
		<div class="form-group{{ $errors->has('region_id') ? ' has-error' : '' }}">
			<label for="region_id">Region:</label>
			<select class="form-control" name="region_id" id="region_id" value="{{ old('region_id', $locacion->comuna->provincia->region_id) }}" required>
				@foreach($regiones as $region)
				<option value="{{$region->id}}">{{$region->nombre}}</option>
				@endforeach
			</select>

			@if ($errors->has('region_id'))
			<span class="help-block">
				<strong>{{ $errors->first('region_id') }}</strong>
			</span>
			@endif
		</div>
	</div>

	<div class="col">
		<div class="form-group{{ $errors->has('provincia_id') ? ' has-error' : '' }}">
			<label for="provincia_id">Provincia:</label>
			<select class="form-control" name="provincia_id" id="provincia_id" value="{{ old('provincia_id', $locacion->comuna->provincia_id) }}" required>

			</select>

			@if ($errors->has('provincia_id'))
			<span class="help-block">
				<strong>{{ $errors->first('provincia_id') }}</strong>
			</span>
			@endif
		</div>
	</div>

	<div class="col">
		<div class="form-group{{ $errors->has('comuna_id') ? ' has-error' : '' }}">
			<label for="comuna_id">Comuna:</label>
			<select class="form-control" name="comuna_id" id="comuna_id" value="{{ old('comuna_id', $locacion->comuna_id) }}" required>

			</select>

			@if ($errors->has('comuna_id'))
			<span class="help-block">
				<strong>{{ $errors->first('comuna_id') }}</strong>
			</span>
			@endif
		</div>
	</div>
</div>


@section('scripts')
<script>
	$(function () {
		var region_id = {{ old('region_id', $locacion->comuna->provincia->region_id) }};
		var provincia_id = {{ old('provincia_id', $locacion->comuna->provincia_id) }};
		var comuna_id = {{ old('comuna_id', $locacion->comuna_id) }};

		$('#region_id').val(region_id).prop('selected', true);
		$('#provincia_id').val(provincia_id).prop('selected', true);

		provinciaUpdate(region_id);
		comunaUpdate(provincia_id);

		$('#region_id').on('change', function (e) {
			var region_id = e.target.value;
			comuna_id = false;
			provincia_id = false;
			provinciaUpdate(region_id);
		});

		$('#provincia_id').on('change', function (e) {
			var provincia_id = e.target.value;
			comuna_id = false;
			comunaUpdate(provincia_id);
		});

		function provinciaUpdate(regionId) {
			$.get('{{ url('provincias') }}/' + regionId, function (data) {
				$('#provincia_id').empty();
				$.each(data, function (index, provincias) {
					if(provincia_id == false) {
						provincia_id = provincias.id;
					}
					$('#provincia_id').append($('<option>', {
						value: provincias.id,
						text: provincias.nombre
					}));
				});
				if (provincia_id) {
					$('#provincia_id').val(provincia_id).prop('selected', true);
					comunaUpdate(provincia_id);
				}
			});
		}

		function comunaUpdate(provinciaId) {
			$.get('{{ url('comunas') }}/' + provinciaId, function (data) {
				$('#comuna_id').empty();
				$.each(data, function (index, comunas) {
					if(comuna_id == false) {
						comuna_id = comunas.id;
					}
					$('#comuna_id').append($('<option>', {
						value: comunas.id,
						text: comunas.nombre
					}));
				});
				if (comuna_id) {
					$('#comuna_id').val(comuna_id).prop('selected', true);
				}
			});
		}
	});
</script>
@endsection