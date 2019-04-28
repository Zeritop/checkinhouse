@extends('intranet.layout.principal')


@section('content')
<div class="cajaOscura">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Diagnostico General</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('diagnosticogeneral.create') }}"> Crear Nuevo Diagnostico</a>
            </div>
        </div>
        <div class="pull-right">
                {{ Form::open(['route' => 'diagnosticogeneral.index', 'method' => 'GET', 'class' => 'form-inline']) }}
                    <div class="form-group">
                        {{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripcion'])}}
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
            <a class="btn btn-info" href="{{ route('diagnosticogeneral.show',$servicio->id) }}">Ver</a>
            <a class="btn btn-primary" href="{{ route('diagnosticogeneral.edit',$servicio->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['diagnosticogeneral.destroy', $servicio->id], 'onsubmit'=> 'return ConfirmDelete()','style'=>'display:inline']) !!}
            {!! Form::submit('Del', ['class' => 'btn btn-danger']) !!}
            
            
            {!! Form::close() !!}
            
        </td>
        </tr>
    @endforeach
    </table>


    

</div>
@endsection