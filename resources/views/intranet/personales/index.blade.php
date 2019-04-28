@extends('intranet.layout.principal')


@section('content')
<div style="background-color:#1e1e2f; padding:20px; border-radius:5px;">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Personal</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('personales.create') }}"> Crear Nuevo Personal</a>
            </div>
        </div>
        <div class="pull-right">
                {{ Form::open(['route' => 'personales.index', 'method' => 'GET', 'class' => 'form-inline']) }}
                    <div class="form-group">
                        {{ Form::text('rut_pers', null, ['class' => 'form-control', 'placeholder' => 'Rut'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::text('nom_pers', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
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
                <th>Codigo Personal</th>
                <th>Rut Personal</th>
                <th>Nombre Personal</th>
                <th>Apellido Personal</th>
                <th>Direccion Personal</th>
                <th>Telefono Personal</th>
                <th width="280px">Action</th>
            </tr>    
        </thead>
        
    @foreach ($personales as $personal)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $personal->cod_pers}}</td>
        <td>{{ $personal->rut_pers}}</td>
        <td>{{ $personal->nom_pers}}</td>
        <td>{{ $personal->ape_pers}}</td>
        <td>{{ $personal->dir_pers}}</td>
        <td>{{ $personal->tel_pers}}</td>
        <script>

  function ConfirmDelete()
  {
  var x = confirm("多Deseas Eliminarlo?");
  if (x)
    return true;
  else
    return false;
  }

</script>
        <td>
            <a class="btn btn-info" href="{{ route('personales.show',$personal->id) }}">Ver</a>
            <a class="btn btn-primary" href="{{ route('personales.edit',$personal->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['personales.destroy', $personal->id],'onsubmit' => 'return ConfirmDelete()','style'=>'display:inline']) !!}
            {!! Form::submit('Del', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
        </tr>
    @endforeach
    </table>


</div>
    
    {!! $personales->links() !!}
@endsection