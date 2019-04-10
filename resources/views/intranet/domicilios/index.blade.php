@extends('intranet.layout.principal')


@section('content')
<div style="background-color:#1e1e2f; padding:20px; border-radius:5px;">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Domicilios</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('domicilios.create') }}"> Crear Nuevo Domicilio</a>
            </div>
        </div>
        <div class="pull-right">
                {{ Form::open(['route' => 'domicilios.index', 'method' => 'GET', 'class' => 'form-inline']) }}
                    <div class="form-group">
                        {{ Form::text('cod_dom', null, ['class' => 'form-control', 'placeholder' => 'Codigo'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::text('dir_dom', null, ['class' => 'form-control', 'placeholder' => 'Direccion'])}}
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
                <th>Codigo Domicilio</th>
                <th>Direccion Domicilio</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        
    @foreach ($domicilios as $domicilio)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $domicilio->cod_dom}}</td>
        <td>{{ $domicilio->dir_dom}}</td>
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
            <a class="btn btn-info" href="{{ route('domicilios.show',$domicilio->id) }}">Ver</a>
            <a class="btn btn-primary" href="{{ route('domicilios.edit',$domicilio->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['domicilios.destroy', $domicilio->id], 'onsubmit'=> 'return ConfirmDelete()','style'=>'display:inline']) !!}
            {!! Form::submit('Del', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
        </tr>
    @endforeach
    </table>


   
</div>
{!! $domicilios->links() !!}
@endsection