@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="card">
        <div class="card-header card-header-info">
            <h2> Detalles Tarea <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('chGeneradors.index') }}">Atras</a>
            </div></h2>
        </div>
        <div class="card-body">
            <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo Tarea:</strong>
                {{ $ch_generador->titulo_gen}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #1:</strong>
                {{ $ch_generador->tarea1}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #2:</strong>
                {{ $ch_generador->tarea2}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #3:</strong>
                {{ $ch_generador->tarea3}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #4:</strong>
                {{ $ch_generador->tarea4}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #5:</strong>
                {{ $ch_generador->tarea5}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #6:</strong>
                {{ $ch_generador->tarea6}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #7:</strong>
                {{ $ch_generador->tarea7}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #8:</strong>
                {{ $ch_generador->tarea8}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #9:</strong>
                {{ $ch_generador->tarea9}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #10:</strong>
                {{ $ch_generador->tarea10}}
            </div>
        </div>
        @if($ext11->tarea11 != null)
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #11:</strong>
                {{ $ch_generador->tarea11}}
            </div>
        </div>
        @endif
        @if($ext12->tarea12 != null)
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #12:</strong>
                {{ $ch_generador->tarea12}}
            </div>
        </div>
        @endif
        @if($ext13->tarea13 != null)
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #13:</strong>
                {{ $ch_generador->tarea13}}
            </div>
        </div>
        @endif
        @if($ext14->tarea14 != null)
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #14:</strong>
                {{ $ch_generador->tarea14}}
            </div>
        </div>
        @endif

        @if($ext15->tarea15 != null)
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #15:</strong>
                {{ $ch_generador->tarea15}}
            </div>
        </div>
        @endif

        @if($ext16->tarea16 != null)
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #16:</strong>
                {{ $ch_generador->tarea16}}
            </div>
        </div>
        @endif

        @if($ext17->tarea17 != null)
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #17:</strong>
                {{ $ch_generador->tarea17}}
            </div>
        </div>
        @endif

        @if($ext18->tarea18 != null)
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #18:</strong>
                {{ $ch_generador->tarea18}}
            </div>
        </div>
        @endif

        @if($ext19->tarea19 != null)
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #19:</strong>
                {{ $ch_generador->tarea19}}
            </div>
        </div>
        @endif

        @if($ext20->tarea20 != null)
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea #20:</strong>
                {{ $ch_generador->tarea20}}
            </div>
        </div>
        @endif


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Creado:</strong>
                {{ $ch_generador->created_at}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Actualizado:</strong>
                {{ $ch_generador->updated_at}}
            </div>
        </div>

    </div>

        </div>
    </div>
</div>


@endsection
