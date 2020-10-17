<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">

            <label for="foto"> Foto</label>
                <input type="file" name="foto">

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Titulo (parte verde, 23 palabras minimo):</strong>
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
      <label for="exampleFormControlSelect1">Servicio</label>
      <select class="form-control" id="exampleFormControlSelect1" name="nombre" style="color: black;">
        <option disabled>Elije un servicio...</option>
        @foreach ($categoriaa as $cat)
        <option>{{ $cat->nombre }}</option>
        @endforeach
      </select>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="" name="vl" id="vl">
              <span class="form-check-sign">
                <span class="check"></span>
              </span>
    
              Vehiculos Livianos
    
          </label>
        </div>
    
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="" name="vp" id="vp">
              <span class="form-check-sign">
                <span class="check"></span>
              </span>
    
              Vehiculos Pesados
    
          </label>
        </div>
    
      </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
</div>
