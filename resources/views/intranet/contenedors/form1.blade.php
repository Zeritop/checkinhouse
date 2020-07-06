<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Codigo contenedor:</strong>
            {!! Form::text('cod_contenedor', null, array('placeholder' => '001','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre Contenedor:</strong>
            {!! Form::text('nombre_contenedor', null, array('placeholder' => 'Caja Azul','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Capacidad Contenedor:</strong>
            {!! Form::text('capacidad_contenedor', null, array('placeholder' => '1000 piezas','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <label for="exampleFormControlSelect1">Taller donde está el contenedor</label>
      <select class="form-control" id="exampleFormControlSelect1" name="nombre_taller_contenedor" style="color: black;">
        <option disabled selected>Elige un taller...</option>
        @foreach ($contenedorr as $conte)
        <option value="{{$conte->cod_taller}}" {{ ($cont_taller->cod_taller == $conte->cod_taller) ? 'selected' : '' }} >{{ $conte->nombre_taller }}</option>
        @endforeach


      </select>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
      <label for="exampleFormControlSelect1">Contenedor donde está el contenedor</label>
      <select class="form-control" id="exampleFormControlSelect1" name="cid" style="color: black;">
        <option disabled selected>Elige un contenedor...</option>
        @foreach ($conte1 as $c)
        <option value="{{$c->id}}" {{ ($conte_cont->cid == $c->id) ? 'selected' : '' }}>{{ $c->nombre_contenedor }}</option>
        @endforeach
      </select>

    </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
