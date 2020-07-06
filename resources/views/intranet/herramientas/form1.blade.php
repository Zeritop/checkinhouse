<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre herramienta:</strong>
            {!! Form::text('nom_her', null, array('placeholder' => 'Martillo','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alias herramienta:</strong>
            {!! Form::text('alias_her', null, array('placeholder' => 'El saca tornillos','class' => 'form-control', 'required')) !!}
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vida herramienta:</strong>
                {!! Form::text('vida_her', null, array('placeholder' => '1 año','class' => 'form-control', 'required')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Marca:</strong>
                {!! Form::text('marca_her', null, array('placeholder' => 'Baucker','class' => 'form-control', 'required')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Medidas:</strong>
                {!! Form::text('medidas_her', null, array('placeholder' => '10 cm','class' => 'form-control', 'required')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
          <label for="exampleFormControlSelect1">Prioridad herramienta</label>
          <select class="form-control" id="exampleFormControlSelect1" name="prioridad_her" style="color: black;">
            <option disabled selected>Elije una prioridad...</option>
            <option {{ ($herramienta->prioridad_her == 'Baja') ? 'selected' : '' }}>Baja</option>
            <option {{ ($herramienta->prioridad_her == 'Media') ? 'selected' : '' }}>Media</option>
            <option {{ ($herramienta->prioridad_her == 'Alta') ? 'selected' : '' }}>Alta</option>
          </select>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
          <label>Foto Herramienta: </label>
          <input type="file" name="foto_her" id="foto_her">
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
          <label for="exampleFormControlSelect1">Tipo de herramienta</label>
          <select class="form-control" id="exampleFormControlSelect1" name="id_tipo_herramienta" style="color: black;">
            <option disabled selected>Elige un tipo de herramienta...</option>
            @foreach ($tipo as $th)
            <option value="{{$th->id}}" {{ ($herramienta->id_tipo_herramienta == $th->id) ? 'selected' : '' }} >{{ $th->nombre_th }}</option>
            @endforeach
          </select>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
          <label for="exampleFormControlSelect1">Contenedor</label>
          <select class="form-control" id="exampleFormControlSelect1" name="cod_contenedor_her" style="color: black;">
            <option disabled selected>Elije un contenedor...</option>
            @foreach ($herra_contenedor as $herra)
            <option value="{{$herra->cod_contenedor}}" {{ ($herramienta->cod_contenedor_her == $herra->cod_contenedor) ? 'selected' : '' }} >{{ $herra->nombre_contenedor }}</option>
            @endforeach
          </select>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
