@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="card">
        <div class="card-header card-header-warning">
            <h2>Editar Repuesto <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('repuestos.index') }}"> Atras</a>
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


    {!! Form::model($repuesto, ['method' => 'PATCH','route' => ['repuestos.update', $repuesto->id]]) !!}
        @include('intranet.repuestos.form')
    {!! Form::close() !!}
        </div>
    </div>
</div>
  

@endsection
