@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="card">
        <div class="card-header card-header-success">
            <h2>Crear Nueva Herramienta <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('herramientas.index') }}">Atras</a>
            </div></h2>
        </div>
        <div class="card-body">
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
    </div>
</div>
   
@endsection