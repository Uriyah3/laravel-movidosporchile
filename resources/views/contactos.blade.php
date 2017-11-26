@extends('layouts.master-sidebarless')


@section('content')
<h1>Contacto</h1>

<form action="/contactos" method="POST">
	<div class="form-row">
		<div class="col">
			<div class="form-group">
				<label for="nombre">Nombre:</label>
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="leonardo">
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="apellido">Apellido:</label>
				<input type="text" class="form-control" id="apellido" name="apellido" placeholder=" farkas">
			</div>
		</div>
	</div>

	<div class="form-group">
		<label for="email">Email:</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="juanido.peres@gmail.com">
	</div>

	<div class="form-group">
		<label for="message">Mensaje:</label>
		<textarea class="form-control" rows="5" id="message" name="message"></textarea>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>

</form>
@endsection
