@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="card">
        <div class="card-header card-header-success">
            <h2>Generar Tareas <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('chGeneradors.create') }}"> Crear Nueva Tarea</a>
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

              <th width="300px">Action</th>
          </tr>
      </thead>

  @foreach ($ch_generadors as $generador)
  <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $generador->titulo_gen}}</td>

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
          <a class="btn btn-info" href="{{ route('chGeneradors.show',$generador->id) }}">
            <span class="material-icons">
              visibility
            </span>
          </a>
          <a class="btn btn-primary" href="{{ route('chGeneradors.edit',$generador->id) }}">
            <span class="material-icons">
              edit
            </span>
          </a>
          {!! Form::open(['method' => 'DELETE','route' => ['chGeneradors.destroy', $generador->id],
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

    {!! $ch_generadors->links() !!}
@endsection
