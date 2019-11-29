@extends('intranet.layout.ultimo')


@section('content')

<div class="content">
    <div class="card">
        <div class="card-header card-header-info">
            <h2> Ver Categoria <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('catServs.index') }}">Atras</a>
            </div></h2>
        </div>
        <div class="card-body">
            <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $categoria->nombre}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>
                {{ $categoria->titulo}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion:</strong>
                {{ $categoria->descripcion}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Creado:</strong>
                {{ $categoria->created_at}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Actualizado:</strong>
                {{ $categoria->updated_at}}
            </div>
        </div>
    </div>
    <img width="500px;" src="/storage/{{ $categoria->foto }}"  alt="">
        </div>
    </div>
</div>
 

   
@endsection