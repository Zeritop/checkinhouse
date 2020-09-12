@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="pull-right">
                {{ Form::open(['route' => 'clientes.index', 'method' => 'GET', 'class' => 'form-inline']) }}
                    <div class="form-group">
                        {{ Form::text('rut_cli', null, ['class' => 'form-control', 'placeholder' => 'Rut'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::text('nom_cli', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
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
            <h2>Clientes <div class="pull-right">
              @can('clientes.create')
                <a class="btn btn-primary" href="{{ route('clientes.create') }}"> Crear Nuevo Cliente</a>
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
              <th>Rut</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Telefono</th>
              <th>Correo</th>
              <th>Domicilio</th>
              <th width="280px">Action</th>
          </tr>
      </thead>

  @foreach ($clientes as $cliente)
  <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $cliente->rut_cli}}</td>
      <td>{{ $cliente->nom_cli}}</td>
      <td>{{ $cliente->ape_cli}}</td>
      <td>{{ $cliente->tel_cli}}</td>
      <td>{{ $cliente->mail_cli}}</td>
      <td>{{ $cliente->cod_dom_cli}}</td>
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
        @can('clientes.show')
          <a class="btn btn-info" href="{{ route('clientes.show',$cliente->id) }}">
            <span class="material-icons">
              visibility
            </span>
          </a>
          @endcan
          @can('clientes.edit')
          <a class="btn btn-primary" href="{{ route('clientes.edit',$cliente->id) }}">
            <span class="material-icons">
              edit
            </span>
          </a>
          @endcan
          @can('clientes.destroy')
          {!! Form::open(['method' => 'DELETE','route' => ['clientes.destroy', $cliente->id],
           'onsubmit'=> 'return ConfirmDelete()','style'=>'display:inline']) !!}
          {!! Form::button('<span class="material-icons">delete</span>', ['type' => 'submit',
                                                          'class' => 'btn btn-danger']) !!}


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

    {!! $clientes->links() !!}
@endsection
