@extends('intranet.layout.principal')


@section('content')
<div style="background-color:#1e1e2f; padding:20px; border-radius:5px;">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Clientes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('clientes.create') }}"> Crear Nuevo Cliente</a>
            </div>
        </div>
        <div class="pull-right">
                {{ Form::open(['route' => 'clientes.index', 'method' => 'GET', 'class' => 'form-inline']) }}
                    <div class="form-group">
                        {{ Form::text('rut_cli', null, ['class' => 'form-control', 'placeholder' => 'Rut'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::text('nom_cli', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                    {{ Form::close() }}
            </div>
    </div>  


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


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
        <td>{{ $cliente->cod_dom}}</td>
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
            <a class="btn btn-info" href="{{ route('clientes.show',$cliente->id) }}">Ver</a>
            <a class="btn btn-primary" href="{{ route('clientes.edit',$cliente->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['clientes.destroy', $cliente->id], 'onsubmit'=> 'return ConfirmDelete()','style'=>'display:inline']) !!}
            {!! Form::submit('Del', ['class' => 'btn btn-danger']) !!}
            
            
            {!! Form::close() !!}
            
        </td>
        </tr>
    @endforeach
    </table>
</div>
   


    {!! $clientes->links() !!}
@endsection