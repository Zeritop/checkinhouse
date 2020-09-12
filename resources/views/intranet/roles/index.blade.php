@extends('intranet.layout.ultimo')


@section('content')
<div class="content">

    <div class="card">
        <div class="card-header card-header-success">
            <h2>Roles <div class="pull-right">
              @can('roles.create')
                <a class="btn btn-primary" href="{{ route('roles.create') }}"> Crear Nuevo Rol</a>
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

  @foreach ($roles as $rol)
  <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $rol->name}}</td>

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
          @can('roles.show')
          <a class="btn btn-info" href="{{ route('roles.show',$rol->id) }}">
            <span class="material-icons">
              visibility
            </span>
          </a>
          @endcan
          @can('roles.edit')
          <a class="btn btn-warning" href="{{ route('roles.edit',$rol->id) }}">
            <span class="material-icons">
              edit
            </span>
          </a>
          @endcan
          @can('roles.destroy')
          {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $rol->id],
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
<div class="container">{!! $roles->links() !!}</div>

@endsection
