<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="foto">
                <input type="file" name="foto">
            </label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Titulo (parte verde):</strong>
            {!! Form::text('titulo', null, array('placeholder' => 'Titulo','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Descripcion:</strong>
            {!! Form::textarea('descripcion', null, array('placeholder' => 'Descripcion','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre Servicio:</strong>
            {!! Form::text('nombre', null, array('placeholder' => 'nombre','class' => 'form-control', 'required')) !!}
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
</div>