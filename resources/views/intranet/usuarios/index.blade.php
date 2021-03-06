@extends('intranet.layout.principal')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Usuarios</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('usuarios.create') }}"> Crear Nuevo Usuario</a>
            </div>
        </div>
        <div class="pull-right">
                {{ Form::open(['route' => 'usuarios.index', 'method' => 'GET', 'class' => 'form-inline']) }}
                    <div class="form-group">
                        {{ Form::text('rut_usu', null, ['class' => 'form-control', 'placeholder' => 'Rut'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::text('nom_usu', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
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
                <th width="280px">Action</th>
            </tr>
        </thead>
        
    @foreach ($usuarios as $usuario)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $usuario->rut_usu}}</td>
        <td>{{ $usuario->nom_usu}}</td>
        <td>{{ $usuario->ape_usu}}</td>
        <td>{{ $usuario->tel_usu}}</td>
        <td>{{ $usuario->mail_usu}}</td>
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
            <a class="btn btn-info" href="{{ route('usuarios.show',$usuario->id) }}">Ver</a>
            <a class="btn btn-primary" href="{{ route('usuarios.edit',$usuario->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['usuarios.destroy', $usuario->id], 'onsubmit'=> 'return ConfirmDelete()','style'=>'display:inline']) !!}
            {!! Form::submit('Del', ['class' => 'btn btn-danger']) !!}
            
            
            {!! Form::close() !!}
            
        </td>
        </tr>
    @endforeach
    </table>


    {!! $usuarios->links() !!}
@endsection