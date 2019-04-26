@extends('intranet.layout.principal')


@section('content')
<div style="background-color:#1e1e2f; padding:20px; border-radius:5px;">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Repuestos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('repuestos.create') }}"> Crear Nuevo Repuesto</a>
            </div>
        </div>
        <div class="pull-right">
                {{ Form::open(['route' => 'repuestos.index', 'method' => 'GET', 'class' => 'form-inline']) }}
                    <div class="form-group">
                        {{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'Codigo'])}}
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
            <a class="btn btn-info" href="{{ route('repuestos.show',$repuesto->id) }}">Ver</a>
            <a class="btn btn-primary" href="{{ route('repuestos.edit',$repuesto->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['repuestos.destroy', $repuesto->id], 'onsubmit'=> 'return ConfirmDelete()','style'=>'display:inline']) !!}
            {!! Form::submit('Del', ['class' => 'btn btn-danger']) !!}
            
            
            {!! Form::close() !!}
            
        </td>
        </tr>
    @endforeach
    </table>
</div>
   


    {!! $repuestos->links() !!}
@endsection