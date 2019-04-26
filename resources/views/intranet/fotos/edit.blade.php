@extends('intranet.layout.principal')


@section('content')
<div style="background-color:#1e1e2f; padding:20px; border-radius:5px;">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
<<<<<<< HEAD
                <h2>Editar Foto</h2>
=======
                <h2>Editar Producto</h2>
>>>>>>> seba
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('fotos.index') }}"> Atras</a>
            </div>
        </div>
    </div>


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



    {!! Form::model($foto, ['method' => 'PATCH','route' => ['fotos.update', $foto->id]]) !!}
        @include('intranet.fotos.form1')
    {!! Form::close() !!}



</div>
   
@endsection