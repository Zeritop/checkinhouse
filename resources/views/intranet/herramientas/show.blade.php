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
                <strong>Cod:</strong>
                {{ $herramienta->cod_her}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $herramienta->nom_her}}
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
                <strong>Taller:</strong>
                {{ $herramienta->cod_taller}}
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
    </div>

        </div>
    </div>
</div>
  
    
@endsection