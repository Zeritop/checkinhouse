@extends('intranet.layout.principal')


@section('content')

<div style="background-color:#1e1e2f; padding:20px; border-radius:5px;">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Ver Domicilio</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('domicilios.index') }}">Atras</a>
            </div>
        </div>
    </div>


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
    
@endsection