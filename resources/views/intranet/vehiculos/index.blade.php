@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="pull-right">
                {{ Form::open(['route' => 'vehiculos.index', 'method' => 'GET', 'class' => 'form-inline']) }}
                    <div class="form-group">
                        {{ Form::text('patente_veh', null, ['class' => 'form-control',
                                                                            'placeholder' => 'Patente'])}}
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
            <h2>Vehiculos <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('vehiculos.create') }}"> Crear Nuevo Vehiculo</a>
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
              <th>Cod</th>
              <th>Modelo</th>
              <th>Patente</th>
              <th>Marca</th>
              <th>Cliente</th>
              <th>Taller</th>

              <th width="280px">Action</th>
          </tr>
      </thead>

  @foreach ($vehiculos as $vehiculo)
  <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $vehiculo->cod_veh}}</td>
      <td>{{ $vehiculo->modelo_veh}}</td>
      <td>{{ $vehiculo->patente_veh}}</td>
      <td>{{ $vehiculo->marca_veh}}</td>
      <td>{{ $vehiculo->rut_cli_veh}}</td>
      @foreach ($vehiculoss as $veh)
      <td>{{ $veh->nombre_taller}}</td>
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
          <a class="btn btn-info" href="{{ route('vehiculos.show',$vehiculo->id) }}">
            <span class="material-icons">
              visibility
            </span>
          </a>
          <a class="btn btn-warning" href="{{ route('vehiculos.edit',$vehiculo->id) }}">
            <span class="material-icons">
              edit
            </span>
          </a>
          {!! Form::open(['method' => 'DELETE','route' => ['vehiculos.destroy', $vehiculo->id],
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

    {!! $vehiculos->links() !!}
@endsection
