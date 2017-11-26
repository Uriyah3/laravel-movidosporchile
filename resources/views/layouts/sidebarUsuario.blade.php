<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">

  <ul class="nav nav-pills flex-column">
    <li class="nav-item {{ Request::segment(1) === 'medidas' ? 'active' : null }}">
      <a class="nav-link" data-toggle="pill" href="/medidas">Medidas</a>
    </li>
    <li class="nav-item {{ Request::segment(1) === 'voluntariados' ? 'active' : null }}">
      <a class="nav-link" data-toggle="pill" href="/voluntariados">Voluntariado</a>
    </li>
    <li class="nav-item {{ Request::segment(1) === 'donaciones' ? 'active' : null }}">
      <a class="nav-link" data-toggle="pill" href="/donaciones">Donaciones de Dinero</a>
    </li>
    <li class="nav-item {{ Request::segment(1) === 'centros_de_acopio' ? 'active' : null }}">
      <a class="nav-link" data-toggle="pill" href="/centros_de_acopio">Donaciones de Bienes</a>
    </li>
    <li class="nav-item {{ Request::segment(1) === 'eventos_a_beneficio' ? 'active' : null }}">
      <a class="nav-link" data-toggle="pill" href="/eventos_a_beneficio">Eventos a Beneficio</a>
    </li>
  </ul>

</nav>