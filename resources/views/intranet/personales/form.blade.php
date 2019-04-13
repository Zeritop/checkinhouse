<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Codigo Personal:</strong>
                {!! Form::text('cod_pers', null, array('placeholder' => 'Codigo','class' => 'form-control', 'required')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rut Personal:</strong>
                {!! Form::text('rut_pers', null, array('placeholder' => 'Rut','class' => 'form-control', 'required')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre Personal:</strong>
                {!! Form::text('nom_pers', null, array('placeholder' => 'Nombre','class' => 'form-control', 'required')) !!}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellido Personal:</strong>
                {!! Form::text('ape_pers', null, array('placeholder' => 'Apellido','class' => 'form-control', 'required')) !!}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Direccion del Personal:</strong>
                {!! Form::text('dir_pers', null, array('placeholder' => 'Direccion','class' => 'form-control', 'required')) !!}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefono Personal:</strong>
                {!! Form::text('tel_pers', null, array('placeholder' => 'Telefono','class' => 'form-control', 'required')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>