@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="css/comentario.css">

@section('content')
	<h1>Comentario</h1>

	<div class="form-group">
		<label for="message">Comentario:</label>
		<textarea class="textarea" rows="10" id="message" name="message"></textarea>
	</div>

	<div class="form-group">
		<ul>
			<button type="submit" class="btn btn-primary" onclick="/ventana donde se crea">Enviar</button>
			<button type="submit" class="btn btn-primary" onclick="ventana donde se edita junto con la id">Editar</button>
			<button type="submit" class="btn btn-primary" onclick="ventana donde se edita junto con la id">Eliminar</button></ul>
	</div>
@endsection