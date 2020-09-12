@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="pull-right">
                {{ Form::open(['route' => 'mantenimientofrenos.index', 'method' => 'GET', 'class' => 'form-inline']) }}
                    <div class="form-group">
                        {{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripcion'])}}
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
            <h2>Mantenimiento Frenos <div class="pull-right">
              @can('mantenimientofrenos.create')
                <a class="btn btn-primary" href="{{ route('mantenimientofrenos.create') }}"> Crear Nuevo Mantenimiento</a>
              @endcan
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
              <th>nombre</th>
              <th>descripcion</th>
              <th>Precio</th>

              <th width="280px">Action</th>
          </tr>
      </thead>

  @foreach ($servicios as $servicio)
  <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $servicio->nombre}}</td>
      <td>{{ $servicio->descripcion}}</td>
      <td>{{ $servicio->precio}}</td>

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
        @can('mantenimientofrenos.show')
          <a class="btn btn-info" href="{{ route('mantenimientofrenos.show',$servicio->id) }}">
            <span class="material-icons">
              visibility
            </span>
          </a>
          @endcan
          @can('mantenimientofrenos.edit')
          <a class="btn btn-warning" href="{{ route('mantenimientofrenos.edit',$servicio->id) }}">
            <span class="material-icons">
              edit
            </span>
          </a>
          @endcan
          @can('mantenimientofrenos.destroy')
          {!! Form::open(['method' => 'DELETE','route' => ['mantenimientofrenos.destroy', $servicio->id], 'onsubmit'=> 'return ConfirmDelete()','style'=>'display:inline']) !!}
          {!! Form::button('<span class="material-icons">delete</span>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}


          {!! Form::close() !!}
          @endcan
      </td>
      </tr>
  @endforeach
  </table>
</div>



        </div>
    </div>
</div>

@endsection
