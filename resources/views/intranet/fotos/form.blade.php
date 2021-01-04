<div class="row">
    <!--
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="nombre">
                <input type="file" name="nombre">
            </label>
        </div>
    </div> -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <label>Foto/imagen de PORTADA: </label>
        <input type="file" name="portada">
      </div>
   
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre del producto:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Nombre','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Precio:</strong>
            {!! Form::text('precio', null, array('placeholder' => 'Precio','class' => 'form-control', 'required')) !!}
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
            <strong>Cantidad:</strong>
            {!! Form::number('cantidad', null, array('placeholder' => 'Cantidad','class' => 'form-control', 'required')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <label>Fotos/imagenes: </label>
        <input type="file" name="nombre[]" multiple>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
    </div>
