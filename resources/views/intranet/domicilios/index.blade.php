@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="pull-right">
                {{ Form::open(['route' => 'domicilios.index', 'method' => 'GET', 'class' => 'form-inline']) }}
                    <div class="form-group">
                        {{ Form::text('cod_dom', null, ['class' => 'form-control', 'placeholder' => 'Codigo'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::text('dir_dom', null, ['class' => 'form-control', 'placeholder' => 'Direccion'])}}
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
            <h2>Domicilios <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('domicilios.create') }}"> Crear Nuevo Domicilio</a>
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
          <a class="btn btn-info" href="{{ route('domicilios.show',$domicilio->id) }}">
            <span class="material-icons">
              visibility
            </span>
          </a>
          <a class="btn btn-warning" href="{{ route('domicilios.edit',$domicilio->id) }}">
            <span class="material-icons">
              edit
            </span>
          </a>
          {!! Form::open(['method' => 'DELETE','route' => ['domicilios.destroy', $domicilio->id],
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


{!! $domicilios->links() !!}
@endsection
