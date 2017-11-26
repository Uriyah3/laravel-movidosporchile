@extends('layouts.master-sidebarless')

@section('content')
<h1>Añadir catástrofe</h1>
<form action="/catastrofes" method="POST">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="region_id">Region:</label>
		<select class="form-control" name="region_id" id="region_id">
			@foreach($regiones as $region)
			<option value="{{$region->id}}">{{$region->nombre}}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label for="provincia_id">Provincia:</label>
		<select class="form-control" name="provincia_id" id="provincia_id">

		</select>
	</div>

	<div class="form-group">
		<label for="comuna_id">Comuna:</label>
		<select class="form-control" name="comuna_id" id="comuna_id">

		</select>
	</div>

	<div class="form-group">
		<label for="tipo_catastrofe_id">Tipo de Catástrofe:</label>
		<select class="form-control" name="tipo_catastrofe_id">
			@foreach($tipoCatastrofes as $tipoCatastrofe)
			<option value="{{$tipoCatastrofe->id}}">{{$tipoCatastrofe->nombre}}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label for="fecha_catastrofe">Fecha:</label>
		<input type="datetime-local" class="form-control" id="fecha_catastrofe" name="fecha_catastrofe">
	</div>

	<div class="form-group">
		<label for="descripcion">Descripción:</label>
		<input type="text" class="form-control" id="descripcion" name="descripcion">
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Añadir catástrofe</button>
	</div>

</form>
@endsection


@section('scripts')
    <script>
        $(function () {
            var region_id = {{ old('region', 1) }};
            var provincia_id = {{ old('provincia', 1) }};
            var comuna_id = {{ old('comuna', 1) }};

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