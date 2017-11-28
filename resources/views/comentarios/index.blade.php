@section('style2')
{{ Html::style('css/comentario.css') }}
@endsection

<div class="row">
  <div class="col">
    <h2>Comentarios</h2>
  </div>
  @if(Auth::check())
  <div class="col">
    <button class="float-md-right btn btn-info" data-title="Comentar" data-toggle="modal" data-target="#comentar" data-url="{{ URL::current() }}/comentarios"><img class="octicon" src="{{ URL::asset('icons/comment.svg') }}"> Comentar</button>
  </div>
  @endif
</div>


<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Usuario</th>
        <th>Comentario</th>
        <th>Fecha comentario</th>
      </tr>
    </thead>
    <tbody>
      @foreach($comentarios as $comentario)
      <tr>
        <td>{{$comentario->usuario->username}}</td>
        <td>{{$comentario->descripcion}}</td>
        <td>{{$comentario->created_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
{{$comentarios->links()}}

@includeWhen(Auth::check(), 'comentarios.create')