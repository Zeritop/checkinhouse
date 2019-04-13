<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Rut:</strong>
            {!! Form::text('rut_usu', null, array('placeholder' => 'Rut','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            {!! Form::text('nom_usu', null, array('placeholder' => 'Nombre','class' => 'form-control', 'required')) !!}
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellido:</strong>
                {!! Form::text('ape_usu', null, array('placeholder' => 'Apellido','class' => 'form-control', 'required')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefono:</strong>
                {!! Form::text('tel_usu', null, array('placeholder' => 'Telefono','class' => 'form-control', 'required')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Correo:</strong>
                {!! Form::text('mail_usu', null, array('placeholder' => 'Correo','class' => 'form-control', 'required')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Clave:</strong>
                {!! Form::text('clave', null, array('placeholder' => 'Clave','class' => 'form-control', 'required')) !!}
            </div>
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>