@extends('intranet.layout.principal')


@section('content')
<div class="cajaOscura">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Crear Nuevo Diagnostico</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('diagnosticogeneral.index') }}">Atras</a>
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



    {!! Form::open(array('route' => 'diagnosticogeneral.store','method'=>'POST')) !!}
         @include('intranet.servicioss.diagnosticogeneral.form')
    {!! Form::close() !!}
</div>
    

@endsection