@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="css/medida.css">

@section('sidebar')
<<<<<<< HEAD
    @include('layouts.sidebarUsuario')
@endsection


@section('content')
	<h1>Medidas de ayuda</h1>

  <p class="general">
    Las diversas organizaciones que forman parte de Movidos x Chile, imparten una serie de medidas de ayudas para la comunidad damnificada. Estas medidas contemplan diferentes tipos de obras que se llevan a cabo para ayudar a una localidad en específico durante una catástrofe o situación de emergencia.
  </p>

  <br/ >
  <br/ >

    <div class="bien">
      <h2> Donación de Bienes </h2>
      <p>
          Recolección de diversos elementos de ayuda para damnificados, contemplando tanto a personas como a animales. Los bienes a canalizar corresponden en general a agua en bidones, alimentos no perecibles, útiles de aseo, implementos de botiquín, medicamentos y antibióticos, vestuario y vajilla, pudiendo varias dependiendo de la catástrofes y las necesidades presentes.
      </p>
    </div>

    <img class="imbien" src="imagenes/bien1.jpg">

    <br />
    <br />

    <img class="imvoluntario" src="imagenes/voluntariado.jpg">

    <div class="voluntariado">
      <h2> Voluntariado </h2>
      <p>
          Trabajo por un periodo determinado realizado por un conjunto de personas de forma libre y desinterasada, con el fin de ayudar a los damnificados por las catástrofes.
      </p>
    </div>

    <br />
    <br />
    <br />

    <div class="evento">
      <h2> Eventos a Beneficios </h2>
      <p>
          Suceso a realizar en una fecha específica, que cuenta con una serie de actividades con el objetivo de recaudar fondos para ayudar a los damnificados por las catástrofes.
      </p>
    </div>

    <img class="imevento" src="imagenes/evento1.jpg">

    <br />
    <br />
    <br />

    <div class="dinero">
      <h2> Donación de Dinero </h2>
      <p>
          Recaudación de dinero mediante transferencias bancarias, cuyo monto es destinado a la ayuda de los damnificados por las catástrofes, ya sea de forma directa o invirtiendo en diversos eventos determinados.
      </p>
    </div>

    <img class="imdinero" src="imagenes/transferencia1.jpg">
    <br />
    <br />
    <br />


=======
  @include('layouts.sidebarUsuario')
@endsection


@section('content')
<h2>Medidas de ayuda</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Objetivos</th>
				<th>Descripcion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($medidas as $medida)
			<p>
				<tr>
					<td>{{ $medida->id }}</td>
					<td>{{ $medida->objetivos }}</td>
					<td>{{ $medida->descripcion }}</td>
				</tr>
			</p>
			@endforeach

		</tbody>
	</table>
</div>
{{ $medidas->links() }}
>>>>>>> 3c28f85c9e873dd4eeda6ac1b7e12e7dae8a834e
@endsection