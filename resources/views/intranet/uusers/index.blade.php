@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="col-md-12">
        <div class="pull-right">
                    {{ Form::open(['route' => 'uusers.index', 'method' => 'GET', 'class' => 'form-inline']) }}
                    <div class="form-group">
                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email'])}}
                    </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="material-icons">
                                    search
                                </i>
                            </button>
                        </div>
                    {{ Form::close() }}
                </div>
        <div class="card">
                <div class="card-header card-header-success">
                    <h2>Usuarios</h2>
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
              <th>Email</th>
              <th>Rol</th>
              <th width="280px">Action</th>
          </tr>
      </thead>

  @foreach ($users as $user)
  <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $user->name}}</td>
      <td>{{ $user->email}}</td>
      <td>{{ $user->admin}}</td>
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
        @can('uusers.show')
         <a class="btn btn-info" href="{{ route('uusers.show',$user->id) }}">
           <span class="material-icons">
             visibility
           </span>
         </a>
         @endcan
         @can('uusers.edit')
          <a class="btn btn-warning" href="{{ route('uusers.edit',$user->id) }}">
            <span class="material-icons">
              edit
            </span>
          </a>
          @endcan
          @can('uusers.destroy')
          {!! Form::open(['method' => 'DELETE','route' => ['uusers.destroy', $user->id], 'onsubmit'=> 'return ConfirmDelete()','style'=>'display:inline']) !!}
          {!! Form::button('<span class="material-icons">delete</span>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}


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

</div>


    {!! $users->links() !!}
@endsection
