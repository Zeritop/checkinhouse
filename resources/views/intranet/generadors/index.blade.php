@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
      <div class="card">
        <div class="card-header card-header-success">
            <h2>Generador Checklist <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('generadors.create') }}"> Crear Nuevo Checklist</a>
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
                <th>nombre</th>

               
                <th width="280px">Action</th>
            </tr>
        </thead>
        
    @foreach ($generadors as $generador)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $generador->nombre}}</td>
      
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
            <a class="btn btn-info" href="{{ route('generadors.show',$generador->id) }}">Ver</a>
            <a class="btn btn-warning" href="{{ route('generadors.edit',$generador->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['generadors.destroy', $generador->id], 'onsubmit'=> 'return ConfirmDelete()','style'=>'display:inline']) !!}
            {!! Form::submit('Del', ['class' => 'btn btn-danger']) !!}
            
            
            {!! Form::close() !!}
            
        </td>
        </tr>
    @endforeach
    </table>
        </div>
    </div>
</div>

    
@endsection