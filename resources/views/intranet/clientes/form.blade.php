<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Rut:</strong>
            {!! Form::text('rut_cli', null, array('placeholder' => 'Rut','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            {!! Form::text('nom_cli', null, array('placeholder' => 'Nombre','class' => 'form-control', 'required')) !!}
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellido:</strong>
                {!! Form::text('ape_cli', null, array('placeholder' => 'Apellido','class' => 'form-control', 'required')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefono:</strong>
                {!! Form::text('tel_cli', null, array('placeholder' => 'Telefono','class' => 'form-control', 'required')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Correo:</strong>
                {!! Form::text('mail_cli', null, array('placeholder' => 'Correo','class' => 'form-control', 'required')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Domicilio:</strong>
                {!! Form::text('cod_dom', null, array('placeholder' => 'Domicilio','class' => 'form-control', 'required')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-info">Aceptar</button>
        </div>
    </div>