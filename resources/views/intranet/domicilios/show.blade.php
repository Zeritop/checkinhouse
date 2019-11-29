@extends('intranet.layout.ultimo')


@section('content')

<div class="content">
    <div class="card">
        <div class="card-header card-header-info">
            <h2> Ver Domicilio <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('domicilios.index') }}">Atras</a>
            </div></h2>
        </div>
        <div class="card-body">
            <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Codigo Domicilio:</strong>
                {{ $domicilio->cod_dom}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Direccion Domicilio:</strong>
                {{ $domicilio->dir_dom}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Creado:</strong>
                {{ $domicilio->created_at}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Actualizado:</strong>
                {{ $domicilio->updated_at}}
            </div>
        </div>
    </div>

        </div>
    </div>
</div>
    
@endsection