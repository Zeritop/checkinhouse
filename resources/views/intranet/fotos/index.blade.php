@extends('intranet.layout.principal')


@section('content')
<div style="background-color:#1e1e2f; padding:20px; border-radius:5px;">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Productos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('fotos.create') }}"> Crear Nuevo Producto</a>
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
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Descripcion</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        
    @foreach ($fotos as $foto)
    <tr>
        <td>{{ ++$i }}</td>
        <td><img width="100px;" src="/storage/{{ $foto->nombre }}" alt=""></td>
        <td>{{ $foto->precio}}</td>
        <td>{{ $foto->cantidad}}</td>
        <td>{{ $foto->descripcion}}</td>
        
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
            <a class="btn btn-info" href="{{ route('fotos.show',$foto->id) }}">Ver</a>
            <a class="btn btn-primary" href="{{ route('fotos.edit',$foto->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['fotos.destroy', $foto->id], 'onsubmit'=> 'return ConfirmDelete()','style'=>'display:inline']) !!}
            {!! Form::submit('Del', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
        </tr>
    @endforeach
    </table>


   
</div>
{!! $fotos->links() !!}
@endsection