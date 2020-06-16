@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="card">
        <div class="card-header card-header-success">
            <h2>Contenedores <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contenedors.create') }}"> Crear Nuevo Contenedor</a>
            </div></h2>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="table-responsive">
  <table class="table table-hover">
      <thead>
          <tr>
              <th>No</th>
              <th>Codigo</th>
              <th>Nombre</th>
              <th>Taller</th>

              <th width="300px">Action</th>
          </tr>
      </thead>

  @foreach ($contenedores as $contenedor)
  <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $contenedor->cod_contenedor}}</td>
      <td>{{ $contenedor->nombre_contenedor}}</td>
      @foreach($cont_taller as $contall)
      <td>{{ $contall->nombre_taller}}</td>
      @endforeach
      <script>

function ConfirmDelete()
{
var x = confirm("Deseas Eliminarlo?");
if (x)
  return true;
else
  return false;
}

</script>
      <td>
          <a class="btn btn-info" href="{{ route('contenedors.show',$contenedor->id) }}">
            <span class="material-icons">
              visibility
            </span>
          </a>
          <a class="btn btn-warning" href="{{ route('contenedors.edit',$contenedor->id) }}">
            <span class="material-icons">
              edit
            </span>
          </a>
          {!! Form::open(['method' => 'DELETE','route' => ['contenedors.destroy', $contenedor->id],
                        'onsubmit'=> 'return ConfirmDelete()','style'=>'display:inline']) !!}
          {!! Form::button('<span class="material-icons">delete</span>', ['type' => 'submit',
                                                      'class' => 'btn btn-danger']) !!}


          {!! Form::close() !!}

      </td>
      </tr>
  @endforeach
  </table>
</div>



        </div>
    </div>
</div>

    {!! $contenedores->links() !!}
@endsection
