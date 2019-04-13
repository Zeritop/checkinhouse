@extends('intranet.layout.principal')


@section('content')
<div class="cajaOscura">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Herramientas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('herramientas.create') }}"> Crear Nueva Herramienta</a>
            </div>
        </div>
        <div class="pull-right">
                {{ Form::open(['route' => 'herramientas.index', 'method' => 'GET', 'class' => 'form-inline']) }}
                    <div class="form-group">
                        {{ Form::text('cod_her', null, ['class' => 'form-control', 'placeholder' => 'Cod'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::text('nom_her', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
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
                <th>Cod</th>
                <th>Nombre</th>
                <th>Vida</th>
                <th>Marca</th>
                <th>Taller</th>
                
                <th width="280px">Action</th>
            </tr>
        </thead>
        
    @foreach ($herramientas as $herramienta)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $herramienta->cod_her}}</td>
        <td>{{ $herramienta->nom_her}}</td>
        <td>{{ $herramienta->vida_her}}</td>
        <td>{{ $herramienta->marca_her}}</td>
        <td>{{ $herramienta->cod_taller}}</td>
        
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
            <a class="btn btn-info" href="{{ route('herramientas.show',$herramienta->id) }}">Ver</a>
            <a class="btn btn-primary" href="{{ route('herramientas.edit',$herramienta->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['herramientas.destroy', $herramienta->id], 'onsubmit'=> 'return ConfirmDelete()','style'=>'display:inline']) !!}
            {!! Form::submit('Del', ['class' => 'btn btn-danger']) !!}
            
            
            {!! Form::close() !!}
            
        </td>
        </tr>
    @endforeach
    </table>
</div>
    


    {!! $herramientas->links() !!}
@endsection