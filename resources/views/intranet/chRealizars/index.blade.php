@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="card">
        <div class="card-header card-header-success">
            <h2>Realizar Tareas <div class="pull-right">

            </div></h2>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
  @can('chRealizars.create')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
          <form action="{{route('chRealizars.index')}}" method="get">
            <label for="exampleFormControlSelect1">Tarea</label>
            <select class="form-control" id="exampleFormControlSelect1" name="buscar_sel" style="color: black;">
              <option disabled selected>Elige una Tarea a realizar...</option>
              @foreach ($ch_rg as $ch)
              <option value="{{$ch->id}}">{{ $ch->titulo_gen }}</option>
              @endforeach
            </select>
            <div class="md-6 form-group">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </div>

          </form>


        </div>
    </div>

    {!! Form::open(array('route' => 'chRealizars.store','method'=>'POST')) !!}
         @include('intranet.chRealizars.form')
    {!! Form::close() !!}
    @endcan












        </div>
    </div>
</div>


@endsection
