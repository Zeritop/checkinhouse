@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="pull-right">
                {{ Form::open(['route' => 'herramientas.index', 'method' => 'GET', 'class' => 'form-inline']) }}
                    <div class="form-group">
                        {{ Form::text('nom_her', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::text('alias_her', null, ['class' => 'form-control', 'placeholder' => 'Alias'])}}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="material-icons">
                                    search
                                </i>
                        </button>
                    </div>
                    @if($ext2 || $ext3)
                    <div class="table-responsive">
                      <table class="table table-hover">
                          <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Nombre</th>
                                  <th>Alias</th>


                                  <th width="280px">Action</th>
                              </tr>
                          </thead>
                          @foreach ($herramientas as $herramienta)
                          <tr>
                              <td>{{ $herramienta->id }}</td>
                              <td>{{ $herramienta->nom_her}}</td>
                              <td>{{ $herramienta->alias_her}}</td>

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
                                  <a class="btn btn-info" href="{{ route('herramientas.show',$herramienta->id) }}">
                                    <span class="material-icons">
                                      visibility
                                    </span>
                                  </a>
                                  <a class="btn btn-warning" href="{{ route('herramientas.edit',$herramienta->id) }}">
                                    <span class="material-icons">
                                      edit
                                    </span>
                                  </a>
                                  {!! Form::open(['method' => 'DELETE','route' => ['herramientas.destroy', $herramienta->id],
                                  'onsubmit'=> 'return ConfirmDelete()','style'=>'display:inline']) !!}
                                  {!! Form::button('<span class="material-icons">delete</span>', ['type' => 'submit',
                                  'class' => 'btn btn-danger']) !!}


                                  {!! Form::close() !!}

                              </td>
                              </tr>
                          @endforeach
                          </table>
                        </div>
                        @endif
                    {{ Form::close() }}
            </div>
    <div class="card">
        <div class="card-header card-header-success">
            <h2>Herramientas <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('herramientas.create') }}"> Crear Nueva Herramienta</a>
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
              <th>Alias</th>
              <th>Contenedor</th>


              <th width="280px">Action</th>
          </tr>
      </thead>

  @foreach ($herr_jj as $herramienta)
  <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $herramienta->nom_her}}</td>
      <td>{{ $herramienta->alias_her}}</td>
      <td>{{ $herramienta->nombre_contenedor}}</td>

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
          <a class="btn btn-info" href="{{ route('herramientas.show',$herramienta->id) }}">
            <span class="material-icons">
              visibility
            </span>
          </a>
          <a class="btn btn-warning" href="{{ route('herramientas.edit',$herramienta->id) }}">
            <span class="material-icons">
              edit
            </span>
          </a>
          {!! Form::open(['method' => 'DELETE','route' => ['herramientas.destroy', $herramienta->id],
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
  <div class="container">{!! $herramientas->links() !!}</div>

@endsection
