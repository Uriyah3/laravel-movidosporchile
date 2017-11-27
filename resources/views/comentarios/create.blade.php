@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="css/comentario.css">


@section('content')

 	<input type="text" class="usuario" placeholder="Nombre Usuario">
	<br />
	<br />
	<textarea class="comentario" placeholder="Ingrese su comentario" name="message"></textarea>
	<br />
	<br />
	<input type="submit" class="boton" value="Comentar">
	<br />
	<br />


@endsection