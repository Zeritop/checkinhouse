@extends('intranet.layout.principal')


@section('content')
<div style="background-color:#1e1e2f; padding:20px; border-radius:5px;">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Usuarios</h2>
            </div>
        </div>
        
        <div class="pull-right">
                {{ Form::open(['route' => 'uusers.index', 'method' => 'GET', 'class' => 'form-inline']) }}
                    <div class="form-group">
                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email'])}}
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
           <a class="btn btn-info" href="{{ route('uusers.show',$user->id) }}">Ver</a>
            <a class="btn btn-primary" href="{{ route('uusers.edit',$user->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['uusers.destroy', $user->id], 'onsubmit'=> 'return ConfirmDelete()','style'=>'display:inline']) !!}
            {!! Form::submit('Del', ['class' => 'btn btn-danger']) !!}
            
            
            {!! Form::close() !!}
        </td>
        </tr>
    @endforeach
    </table>

</div>
    

    {!! $users->links() !!}
@endsection