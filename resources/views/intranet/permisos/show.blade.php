@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="card">
        <div class="card-header card-header-info">
            <h2> Ver Permiso <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('permisos.index') }}">Atras</a>
            </div></h2>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        {{ $permiso->name}}
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>


@endsection
