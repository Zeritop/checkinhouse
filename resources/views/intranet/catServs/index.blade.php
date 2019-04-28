@extends('intranet.layout.principal')


@section('content')
<div style="background-color:#1e1e2f; padding:20px; border-radius:5px;">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Categoria Servicios</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('catServs.create') }}"> Crear Nueva Categoria</a>
            </div>
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
                <th>Foto</th>
                <th>Nombre</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        
    @foreach ($categorias as $categoria)
    <tr>
        <td>{{ ++$i }}</td>
        <td><img width="100px;" src="/storage/{{ $categoria->foto }}" alt=""></td>
        <td>{{ $categoria->nombre}}</td>

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
            <a class="btn btn-info" href="{{ route('catServs.show',$categoria->id) }}">Ver</a>
            <a class="btn btn-primary" href="{{ route('catServs.edit',$categoria->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['catServs.destroy', $categoria->id], 'onsubmit'=> 'return ConfirmDelete()','style'=>'display:inline']) !!}
            {!! Form::submit('Del', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
        </tr>
    @endforeach
    </table>


   
</div>
{!! $categorias->links() !!}
@endsection