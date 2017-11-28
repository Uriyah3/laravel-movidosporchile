@extends('layouts.master-sidebarless')
@section('style')
{{ Html::style('css/perfil.css') }}
@endsection

@section('content')

	<h1 class="titulo">Datos de usuario</h1>

	<div class="table-responsive">
            <table class="table table-striped">
             <thead>
             <tr>

				<th>Nombre Usuario</th>
				<th>Rut	</th>
				<th>Nombre</th>
				<th>Teléfono</th>
				<th>E-mail</th>
				<th>Fecha Creación</th>

			</tr>
			</thead>
		<tbody>


		<p>
			<tr>


                  <td>{{$usuarios->username}}</td>
                  <td>{{$usuarios->rut}}</td>
                  <td>{{$usuarios->nombre}}</td>
                  <td>{{$usuarios->telefono}}</td>
                  <td>{{$usuarios->email}}</td>
                  <td>{{$usuarios->created_at}}</td>


            </tr>
		</p>


	</tbody>
</table>

</div>

<br />
<br />

		<h2 class="subtitulo"> Registro de Actividades </h2>

		<div class="table-responsive">
            <table class="table table-striped">
             <thead>
             <tr>

				<th>Tipo Actividad</th>
				<th>Fecha Creación</th>

			</tr>
			</thead>
		<tbody>

		@foreach($registroActividades as $registroActividade)
		<p>
			<tr>


                  <td>{{$registroActividade->tipo_actividad->nombre}}</td>
                  <td>{{$registroActividade->created_at}}</td>


            </tr>
		</p>

		@endforeach
	</tbody>
</table>

</div>
 {{$registroActividades->links()}}


@endsection
