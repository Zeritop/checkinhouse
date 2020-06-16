<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Codigo Vehiculo:</strong>
            {!! Form::text('cod_veh', null, array('placeholder' => '001','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Modelo:</strong>
            {!! Form::text('modelo_veh', null, array('placeholder' => 'Spark','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Año del Vehiculo:</strong>
            {!! Form::text('ano_veh', null, array('placeholder' => '1995','class' => 'form-control', 'required')) !!}
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Marca Vehiculo:</strong>
                {!! Form::text('marca_veh', null, array('placeholder' => 'Chevrolet','class' => 'form-control', 'required')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Patente:</strong>
                {!! Form::text('patente_veh', null, array('placeholder' => 'XXZZ34','class' => 'form-control', 'required')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo del vehiculo:</strong>
                {!! Form::text('tipo_veh', null, array('placeholder' => 'Liviano','class' => 'form-control', 'required')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rut Cliente:</strong>
                {!! Form::text('rut_cli_veh', null, array('placeholder' => '12345678','class' => 'form-control', 'required')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
          <label for="exampleFormControlSelect1">Taller</label>
          <select class="form-control" id="exampleFormControlSelect1" name="cod_taller_veh" style="color: black;">
            <option disabled selected>Elige un taller...</option>
            @foreach ($veh_taller as $veh_tal)
            <option value="{{ $veh_tal->cod_taller }}">{{ $veh_tal->nombre_taller }}</option>
            @endforeach
          </select>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
