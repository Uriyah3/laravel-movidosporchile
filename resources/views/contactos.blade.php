@extends('layouts.master')


 @section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('content')
	<head>
		<title>Contacto</title>
	</head>
	<body>
		<h1>Contactos</h1>

		<form action="/contactos" method="POST">
		  Nombre:<br>
		  <input type="text" name="Nombre"  value placeholder="leonardo"><br>
		  Apellido:<br>
		  <input type="text" name="Apellido" value placeholder=" farkas"><br>
		  Mail:<br>
		  <input type="email" name="email"  value placeholder="juanido.peres@gmail.com"><br>
		  Apellido:<br>
		  <input type="email" name="monto"  value placeholder="1000000" ><br><br>
		  <textarea name="message" style="width:400px; height:200px;"></textarea>
		  <br>
		  <input type="submit">
		</form>
		<br>
		

	</body>
@endsection
