@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="card">
        <div class="car-header card-header-warning">
            <h2>Editar Personal <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('personales.index') }}"> Atras</a>
            </div></h2>
        </div>
        <div class="card-body">
            @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::model($personal, ['method' => 'PATCH','route' => ['personales.update', $personal->id]]) !!}
        @include('intranet.personales.form')
    {!! Form::close() !!}
        </div>
    </div>
</div>
   

@endsection