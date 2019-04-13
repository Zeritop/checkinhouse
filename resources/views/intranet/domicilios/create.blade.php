@extends('intranet.layout.principal')


@section('content')

<div style="background-color:#1e1e2f; padding:20px; border-radius:5px;">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Crear Nuevo Domicilio</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('domicilios.index') }}">Atras</a>
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



    {!! Form::open(array('route' => 'domicilios.store','method'=>'POST')) !!}
         @include('intranet.domicilios.form')
    {!! Form::close() !!}

</div>
    
@endsection