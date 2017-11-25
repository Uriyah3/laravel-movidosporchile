@extends('layouts.master')

 @section('sidebar')
<<<<<<< HEAD
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
      <a class="nav-link" href="evento">Eventos a beneficio</a>
    </li>
  </ul>

</nav>
=======
    @include('layouts.sidebarUsuario')
>>>>>>> 6c56b690a0028dfba6b27bc598e5f1ac42da4afc
@endsection


@section('content')
	<h1>Medidas</h1>
@endsection