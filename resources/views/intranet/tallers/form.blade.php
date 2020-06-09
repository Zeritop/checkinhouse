<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Codigo Taller:</strong>
            {!! Form::text('cod_taller', null, array('placeholder' => '001','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre Taller:</strong>
            {!! Form::text('nombre_taller', null, array('placeholder' => 'Taller Central','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Direccion Taller:</strong>
            {!! Form::text('dir_taller', null, array('placeholder' => 'calle falsa #123','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Capacidad Taller:</strong>
            {!! Form::text('cap_taller', null, array('placeholder' => '2 mtrs','class' => 'form-control', 'required')) !!}
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefono Taller:</strong>
                {!! Form::text('tel_taller', null, array('placeholder' => '987654321','class' => 'form-control', 'required')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
