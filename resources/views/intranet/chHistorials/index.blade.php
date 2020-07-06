@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="card">
        <div class="card-header card-header-success">
            <h2>Historial de Tareas <div class="pull-right">

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
              <th>Nombre Tarea</th>
              <th>Rut Cliente</th>
              <th>Patente Cliente</th>

              <th width="300px">Action</th>
          </tr>
      </thead>

  @foreach ($ch_historials as $historial)
  <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $historial->nombre_gen_his}}</td>
      <td>{{ $historial->rut_real_his}}</td>
      <td>{{ $historial->patente_real_his}}</td>

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
          <a class="btn btn-info" href="{{ route('chHistorials.show',$historial->id) }}">
            <span class="material-icons">
              visibility
            </span>
          </a>
          <a class="btn btn-warning" href="{{ route('chHistorials.edit',$historial->id) }}">
            <span class="material-icons">
              edit
            </span>
          </a>


      </td>
      </tr>
  @endforeach
  </table>
</div>



        </div>
    </div>
</div>

    {!! $ch_historials->links() !!}
@endsection
