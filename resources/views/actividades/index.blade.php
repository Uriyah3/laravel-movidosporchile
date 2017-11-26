@extends('layouts.master-sidebarless')

@section('content')
	
	
	<h1>Datos de usuario</h1>

	<div class="table-responsive">
            <table class="table table-striped">
             <thead>
             <tr>
				
				<th>Nombre usuario</th>
				<th>Rut	</th>
				<th>Nombre</th>
				<th>Telefono</th>
				<th>Email</th>
				<th>Fecha creación</th>
				
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
 


		<h2> Registro de Actividades </h2>

		<div class="table-responsive">
            <table class="table table-striped">
             <thead>
             <tr>
				
				<th>Tipo de actividad</th>
				<th>Fecha creación</th>
				
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
