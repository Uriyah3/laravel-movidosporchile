<!--@extends('layouts.master')-->
@extends('layouts.master-sidebarless')


 

@section('content')
	<head>
		<title>Contacto</title>
	</head>
	<body>
		<br />
		<br />
		<h1>Contacto</h1>

		<form action="/contactos" method="POST">
		  Nombre:<br>
		  <input type="text" name="Nombre"  value placeholder="leonardo"><br>
		  Apellido:<br>
		  <input type="text" name="Apellido" value placeholder=" farkas"><br>
		  Mail:<br>
		  <input type="email" name="email"  value placeholder="juanido.peres@gmail.com"><br>
		  <textarea name="message" style="width:400px; height:200px;"></textarea>
		  <br>
		  <input type="submit">
		</form>
		<br>
		

	</body>
@endsection
