@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="pull-right">
                {{ Form::open(['route' => 'personales.index', 'method' => 'GET', 'class' => 'form-inline']) }}
                    <div class="form-group">
                        {{ Form::text('rut_pers', null, ['class' => 'form-control', 'placeholder' => 'Rut'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::text('nom_pers', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
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
            <h2>Personal <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('personales.create') }}"> Crear Nuevo Personal</a>
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
              <th>Codigo Personal</th>
              <th>Rut Personal</th>
              <th>Nombre Personal</th>
              <th>Apellido Personal</th>
              <th>Direccion Personal</th>
              <th>Telefono Personal</th>
              <th width="280px">Action</th>
          </tr>
      </thead>

  @foreach ($personales as $personal)
  <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $personal->cod_pers}}</td>
      <td>{{ $personal->rut_pers}}</td>
      <td>{{ $personal->nom_pers}}</td>
      <td>{{ $personal->ape_pers}}</td>
      <td>{{ $personal->dir_pers}}</td>
      <td>{{ $personal->tel_pers}}</td>
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
          <a class="btn btn-info" href="{{ route('personales.show',$personal->id) }}">
            <span class="material-icons">
              visibility
            </span>
          </a>
          <a class="btn btn-warning" href="{{ route('personales.edit',$personal->id) }}">
            <span class="material-icons">
              edit
            </span>
          </a>
          {!! Form::open(['method' => 'DELETE','route' => ['personales.destroy', $personal->id],
          'onsubmit' => 'return ConfirmDelete()','style'=>'display:inline']) !!}
          {!! Form::button('<span class="material-icons">delete</span>', ['type' => 'submit',
          'class' => 'btn btn-danger']) !!}
          {!! Form::close() !!}
      </td>
      </tr>
  @endforeach
  </table>
</div>





    {!! $personales->links() !!}
        </div>
    </div>
</div>

@endsection
