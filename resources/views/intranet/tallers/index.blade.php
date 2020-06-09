@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="card">
        <div class="card-header card-header-success">
            <h2>Talleres <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tallers.create') }}"> Crear Nuevo Taller</a>
            </div></h2>
        </div>
        <div class="card-body">
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
                <th>Direccion</th>
                <th>Capacidad</th>

                <th width="280px">Action</th>
            </tr>
        </thead>

    @foreach ($tallers as $taller)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $taller->cod_taller}}</td>
        <td>{{ $taller->nombre_taller }}</td>
        <td>{{ $taller->dir_taller}}</td>
        <td>{{ $taller->cap_taller}}</td>

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
            <a class="btn btn-info" href="{{ route('tallers.show',$taller->id) }}">Ver</a>
            <a class="btn btn-primary" href="{{ route('tallers.edit',$taller->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['tallers.destroy', $taller->id], 'onsubmit'=> 'return ConfirmDelete()','style'=>'display:inline']) !!}
            {!! Form::submit('Del', ['class' => 'btn btn-danger']) !!}


            {!! Form::close() !!}

        </td>
        </tr>
    @endforeach
    </table>


        </div>
    </div>
</div>

    {!! $tallers->links() !!}
@endsection
