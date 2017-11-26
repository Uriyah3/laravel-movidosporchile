@extends('layouts.master-sidebarless')


 

@section('content')
	<head>
		<title>Contacto</title>
		<link rel="stylesheet" type="text/css" href="css/contacto.css"> 
	</head>
	<body>
		<br />
		<br />
		<h1>¿Tienes alguna queja o sugerencia?. Contáctanos</h1>

		<form action="/contactos" method="POST">
		  Nombre:<br>
		  <input type="text" class="caja" name="Nombre"  value placeholder="Nombre"><br>
		  Apellido:<br>
		  <input type="text" class="caja" name="Apellido" value placeholder="Apellido"><br>
		  Mail:<br>
		  <input type="email" class="caja" name="email"  value placeholder="movidosxchile@chile.cl"><br>
		  <br />
		  <textarea name="message" class="caja" style="width:500px; height:200px;"></textarea>
		  <br>
		  <input type="submit" class="enviar">
		</form>
		<br>
		

	</body>
@endsection
