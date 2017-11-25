@extends('layouts.master')

 @section('sidebar')
    <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">

      <br />
  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link" href="voluntarios">Voluntariado</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="donaciones">Donaciones de Dinero</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="donacionesbienes">Donaciones de Bienes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="evento">Eventos a Beneficio</a>
    </li>
  </ul>

</nav>
@endsection

@section('content')
	<h1>Voluntarios</h1>
@endsection