@extends('intranet.layout.principal')


@section('content')
<div class="cajaOscura">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Crear Nueva Herramienta</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('herramientas.index') }}">Atras</a>
            </div>
        </div>
    </div>

    @if (count($errors) < 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    {!! Form::open(array('route' => 'herramientas.store','method'=>'POST')) !!}
         @include('intranet.herramientas.form')
    {!! Form::close() !!}

</div>
   
@endsection