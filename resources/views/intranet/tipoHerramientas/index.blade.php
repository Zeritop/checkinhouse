@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="card">
        <div class="card-header card-header-success">
            <h2>Tipo de Herramientas <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tipoHerramientas.create') }}"> Crear Nuevo Tipo</a>
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
              <th>Nombre</th>
              <th>Descripcion</th>


              <th width="280px">Action</th>
          </tr>
      </thead>

  @foreach ($tipoH as $th)
  <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $th->nombre_th}}</td>
      <td>{{ $th->descripcion_th}}</td>

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
          <a class="btn btn-info" href="{{ route('tipoHerramientas.show',$th->id) }}">
            <span class="material-icons">
              visibility
            </span>
          </a>
          <a class="btn btn-warning" href="{{ route('tipoHerramientas.edit',$th->id) }}">
            <span class="material-icons">
              edit
            </span>
          </a>
          {!! Form::open(['method' => 'DELETE','route' => ['tipoHerramientas.destroy', $th->id],
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
  <div class="container">{!! $tipoH->links() !!}</div>

@endsection
