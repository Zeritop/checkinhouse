<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Codigo herramienta:</strong>
            {!! Form::text('cod_her', null, array('placeholder' => '001','class' => 'form-control', 'required')) !!}
        </div>
    </div>
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
          <label for="exampleFormControlSelect1">Prioridad herramienta</label>
          <select class="form-control" id="exampleFormControlSelect1" name="prioridad_her" style="color: black;">
            <option disabled>Elije una prioridad...</option>
            <option>Baja</option>
            <option>Media</option>
            <option>Alta</option>
          </select>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
          <label for="exampleFormControlSelect1">Taller</label>
          <select class="form-control" id="exampleFormControlSelect1" name="cod_taller_her" style="color: black;">
            <option disabled selected>Elije un taller...</option>
            @foreach ($herramientaa as $herra)
            <option value="{{$herra->cod_taller}}">{{ $herra->nombre_taller }}</option>
            @endforeach
          </select>

        </div>
        <div>
          @foreach($herr_tall as $herrtall)
          <label style="color: white;">Si no quieres editar el taller, era: {{ $herrtall->nombre_taller}}</label>
          @endforeach
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
          <label for="exampleFormControlSelect1">Contenedor</label>
          <select class="form-control" id="exampleFormControlSelect1" name="cod_contenedor_her" style="color: black;">
            <option disabled selected>Elije un contenedor...</option>
            @foreach ($herra_contenedor as $herra)
            <option value="{{$herra->cod_contenedor}}">{{ $herra->nombre_contenedor }}</option>
            @endforeach
          </select>

        </div>
        <div>
          @foreach($herr_cont as $herrcont)
          <label style="color: white;">Si no quieres editar el contenedor, era: {{ $herrcont->nombre_contenedor}}</label>
          @endforeach
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
