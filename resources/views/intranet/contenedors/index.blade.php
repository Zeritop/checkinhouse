@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="card">
        <div class="card-header card-header-success">
            <h2>Contenedores <div class="pull-right">
              @can('contenedors.create')
                <a class="btn btn-primary" href="{{ route('contenedors.create') }}"> Crear Nuevo Contenedor</a>
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
              <th>Codigo</th>
              <th>Nombre</th>
              <th>Taller</th>

              <th width="300px">Action</th>
          </tr>
      </thead>

  @foreach ($cont_taller as $contenedor)
  <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $contenedor->cod_contenedor}}</td>
      <td>{{ $contenedor->nombre_contenedor}}</td>

      <td>{{ $contenedor->nombre_taller}}</td>

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
        @can('contenedors.show')
          <a class="btn btn-info" href="{{ route('contenedors.show',$contenedor->id) }}">
            <span class="material-icons">
              visibility
            </span>
          </a>
          @endcan
          @can('contenedors.edit')
          <a class="btn btn-warning" href="{{ route('contenedors.edit',$contenedor->id) }}">
            <span class="material-icons">
              edit
            </span>
          </a>
          @endcan
          @can('contenedors.destroy')
          {!! Form::open(['method' => 'DELETE','route' => ['contenedors.destroy', $contenedor->id],
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

    <div class="container">{!! $contenedores->links() !!}</div>


<div class="content">
  <h3 style="color: white;">Visualización de contenedores.</h3>
  <div class="row">
    @foreach($contenedores1 as $cont)
    <div class="col-xl-4 col-lg-12">
      <div class="card">
        <div class="card-header card-header-info" style="color:black;">
          {{ $cont->nombre_contenedor }}
        </div>
        <div class="card-body" style="color:white;">
          @foreach($unionself as $us)
          @if($cont->id == $us->id)
          * {{ $us->nombre_contenedor }}<br>
          @endif
          @endforeach
        </div>
      </div>
    </div>
    @endforeach
  </div>

</div>

@endsection
