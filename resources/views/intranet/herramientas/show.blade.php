@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="card">
        <div class="card-header card-header-info">
            <h2> Ver herramienta <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('herramientas.index') }}">Atras</a>
            </div></h2>
        </div>
        <div class="card-body">
            <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $herramienta->nom_her}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alias:</strong>
                {{ $herramienta->alias_her}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vida:</strong>
                {{ $herramienta->vida_her}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Marca:</strong>
                {{ $herramienta->marca_her}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prioridad:</strong>
                {{ $herramienta->prioridad_her}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Medidas:</strong>
                {{ $herramienta->medidas_her}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo Herramienta:</strong>
                {{ $tipoH->nombre_th}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contenedor:</strong>

                {{ $herr_jj->nombre_contenedor}}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Creado:</strong>
                {{ $herramienta->created_at}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Actualizado:</strong>
                {{ $herramienta->updated_at}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Foto:</strong>
                {{ $herramienta->foto_her}}
            </div>
        </div>
    </div>
    @if($herramienta->foto_her != null)
<img class="img" width="500px;" src="/storage/{{ $herramienta->foto_her }}">
@else
<img class="img" width="500px;" src="/Imagenes/noFoto.png">
@endif
        </div>
    </div>
</div>


@endsection
