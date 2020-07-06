<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre del Tipo de herramienta:</strong>
            {!! Form::text('nombre_th', null, array('placeholder' => 'Martillos','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Descripcion (opcional):</strong>
            {!! Form::text('descripcion_th', null, array('placeholder' => 'Martillos de X tipo','class' => 'form-control')) !!}
        </div>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
