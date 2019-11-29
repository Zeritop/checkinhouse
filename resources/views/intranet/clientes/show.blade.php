@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="card">
        <div class="card-header card-header-info">
            <h2> Ver Cliente <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('clientes.index') }}">Atras</a>
            </div></h2>
        </div>
        <div class="card-body">
            <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rut:</strong>
                {{ $cliente->rut_cli}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $cliente->nom_cli}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellido:</strong>
                {{ $cliente->ape_cli}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefono:</strong>
                {{ $cliente->tel_cli}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Correo:</strong>
                {{ $cliente->mail_cli}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Domicilio:</strong>
                {{ $cliente->cod_dom}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Creado:</strong>
                {{ $cliente->created_at}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Actualizado:</strong>
                {{ $cliente->updated_at}}
            </div>
        </div>
    </div>
        </div>
    </div>
</div>

@endsection