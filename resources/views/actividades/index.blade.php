@extends('layouts.master-sidebarless')

@section('content')
	
	
	<h1>Datos de usuario</h1>

		<h2> Registro de Actividades </h2>

		<div class="table-responsive">
            <table class="table table-striped">
             <thead>
             <tr>
				<th>Usuario</th>
				<th>Tipo de actividad</th>
				<th>Fecha creación</th>
				
			</tr>
			</thead>	
		<tbody>
			
		@foreach($registroActividades as $registroActividade)
		<p>
			<tr>

                  <td>{{$registroActividade->usuario->nombre}}</td>
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
