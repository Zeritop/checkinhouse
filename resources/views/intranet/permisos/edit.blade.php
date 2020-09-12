@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="card">
        <div class="card-header card-header-warning">
            <h2>Editar Permisos <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('permisos.index') }}"> Atras</a>
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


    {!! Form::model($permiso, ['method' => 'PATCH', 'route' => ['permisos.update', $permiso->id]]) !!}
        @include('intranet.permisos.form')
    {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
