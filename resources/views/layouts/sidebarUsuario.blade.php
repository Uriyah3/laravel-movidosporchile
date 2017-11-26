<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">

  <ul class="nav nav-pills flex-column">
    <li class="nav-item {{ Request::segment(1) === 'medidas' ? 'active' : null }}">
      <a class="nav-link" data-toggle="pill" href="medidas">Medidas</a>
    </li>
    <li class="nav-item {{ Request::segment(1) === 'voluntariado' ? 'active' : null }}">
      <a class="nav-link" data-toggle="pill" href="voluntariado">Voluntariado</a>
    </li>
    <li class="nav-item {{ Request::segment(1) === 'donaciones' ? 'active' : null }}">
      <a class="nav-link" data-toggle="pill" href="donaciones">Donaciones de Dinero</a>
    </li>
    <li class="nav-item {{ Request::segment(1) === 'bienes' ? 'active' : null }}">
      <a class="nav-link" data-toggle="pill" href="bienes">Donaciones de Bienes</a>
    </li>
    <li class="nav-item {{ Request::segment(1) === 'evento' ? 'active' : null }}">
      <a class="nav-link" data-toggle="pill" href="evento">Eventos a Beneficio</a>
    </li>
  </ul>

</nav>