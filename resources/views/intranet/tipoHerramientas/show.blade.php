@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="card">
        <div class="card-header card-header-info">
            <h2> Ver Tipo de herramienta <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tipoHerramientas.index') }}">Atras</a>
            </div></h2>
        </div>
        <div class="card-body">
            <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre Tipo de herramienta:</strong>
                {{ $tipoH->nombre_th}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion:</strong>
                {{ $tipoH->descripcion_th}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Creado:</strong>
                {{ $tipoH->created_at}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Actualizado:</strong>
                {{ $tipoH->updated_at}}
            </div>
        </div>

    </div>

        </div>
    </div>
</div>


@endsection
