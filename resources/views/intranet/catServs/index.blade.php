@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="card">
        <div class="card-header card-header-success">
            <h2>Categoria Servicios <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('catServs.create') }}"> Crear Nueva Categoria</a>
            </div></h2>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="table-responsive">
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
          <a class="btn btn-info" href="{{ route('catServs.show',$categoria->id) }}">
            <span class="material-icons">
            visibility
          </span>
        </a>
          <a class="btn btn-primary" href="{{ route('catServs.edit',$categoria->id) }}">
            <span class="material-icons">
              edit
            </span>
          </a>
          {!! Form::open(['method' => 'DELETE','route' => ['catServs.destroy', $categoria->id],
                            'onsubmit'=> 'return ConfirmDelete()','style'=>'display:inline']) !!}
          {!! Form::button('<span class="material-icons">delete</span>', ['type' => 'submit',
                                                                              'class' => 'btn btn-danger']) !!}
          {!! Form::close() !!}
      </td>
      </tr>
  @endforeach
  </table>
</div>




        </div>
    </div>
</div>

{!! $categorias->links() !!}
@endsection
