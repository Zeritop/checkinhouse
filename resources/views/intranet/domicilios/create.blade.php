@extends('intranet.layout.ultimo')


@section('content')

<div class="content">
    <div class="card">
        <div class="card-header card-header-primary">
            <h2>Crear Nuevo Domicilio <div class="pull-right">
                <a class="btn btn-info" href="{{ route('domicilios.index') }}">Atras</a>
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



    {!! Form::open(array('route' => 'domicilios.store','method'=>'POST')) !!}
         @include('intranet.domicilios.form')
    {!! Form::close() !!}
        </div>
    </div>
</div>
   
@endsection