@extends('intranet.layout.ultimo')


@section('content')
<div class="content">

    <div class="card">
        <div class="card-header card-header-success">
            <h2>Permisos <div class="pull-right">
              @can('permisos.create')
                <a class="btn btn-primary" href="{{ route('permisos.create') }}"> Crear Nuevo Permiso</a>
              @endcan
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
              <th>Nombre</th>

              <th width="280px">Action</th>
          </tr>
      </thead>

  @foreach ($permisos as $permiso)
  <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $permiso->name}}</td>

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
        @can('permisos.show')
          <a class="btn btn-info" href="{{ route('permisos.show',$permiso->id) }}">
            <span class="material-icons">
              visibility
            </span>
          </a>
          @endcan
          @can('permisos.edit')
          <a class="btn btn-warning" href="{{ route('permisos.edit',$permiso->id) }}">
            <span class="material-icons">
              edit
            </span>
          </a>
          @endcan
          @can('permisos.destroy')
          {!! Form::open(['method' => 'DELETE','route' => ['permisos.destroy', $permiso->id],
          'onsubmit'=> 'return ConfirmDelete()','style'=>'display:inline']) !!}
          {!! Form::button('<span class="material-icons">delete</span>', ['type' => 'submit',
          'class' => 'btn btn-danger']) !!}


          {!! Form::close() !!}
          @endcan
      </td>
      </tr>
  @endforeach
  </table>
</div>

</div>
</div>
</div>
<div class="container">{!! $permisos->links() !!}</div>

@endsection
