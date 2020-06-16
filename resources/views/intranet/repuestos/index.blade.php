@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="pull-right">
                {{ Form::open(['route' => 'repuestos.index', 'method' => 'GET', 'class' => 'form-inline']) }}
                    <div class="form-group">
                        {{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'Codigo'])}}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="material-icons">
                                    search
                                </i>
                        </button>
                    </div>
                    {{ Form::close() }}
            </div>
    <div class="card">
        <div class="card-header card-header-success">
            <h2>Repuestos <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('repuestos.create') }}"> Crear Nuevo Repuesto</a>
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
              <th>Cantidad</th>
              <th>Codigo</th>
              <th width="280px">Action</th>
          </tr>
      </thead>

  @foreach ($repuestos as $repuesto)
  <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $repuesto->nombre}}</td>
      <td>{{ $repuesto->cantidad}}</td>
      <td>{{ $repuesto->codigo}}</td>
      <script>

function ConfirmDelete()
{
var x = confirm("¿Deseas Eliminarlo?");
if (x)
  return true;
else
  return false;
}

</script>
      <td>
          <a class="btn btn-info" href="{{ route('repuestos.show',$repuesto->id) }}">
            <span class="material-icons">
              visibility
            </span>
          </a>
          <a class="btn btn-warning" href="{{ route('repuestos.edit',$repuesto->id) }}">
            <span class="material-icons">
              edit
            </span>
          </a>
          {!! Form::open(['method' => 'DELETE','route' => ['repuestos.destroy', $repuesto->id],
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


    {!! $repuestos->links() !!}
@endsection
