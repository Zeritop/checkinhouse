<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <title></title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


  </head>
  <body>
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
                <option>Baja</option>
                <option>Media</option>
                <option>Alta</option>
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
                <option value="{{$th->id}}">{{ $th->nombre_th }}</option>
                @endforeach
              </select>

            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
              <label for="exampleFormControlSelect1">Contenedor</label>
              <select class="form-control" id="exampleFormControlSelect1" name="cod_contenedor_her" style="color: black;">
                <option disabled selected>Elige un contenedor...</option>
                @foreach ($herra_contenedor as $herra)
                <option value="{{$herra->cod_contenedor}}">{{ $herra->nombre_contenedor }}</option>
                @endforeach
              </select>

            </div>
            <br>
            <br><br>
            <br>


            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value="" name="chbx1" id="chbx1">
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                  Rango
              </label>
            </div>
  <p>
    <label for="amount"></label>
    <input type="text"  id="amount" name="amount" readonly style="text: center; color:#f6931f; font-weight:bold;">
    <input type="text" id="amount1" name="amount1" readonly style="text: center; color:#f6931f; font-weight:bold;">

  </p>

  <div id="slider-range" class="col-xs-6 col-sm-12 col-md-12"></div>

<br>
<br>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
  </body>
  <script>

      $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 100,
        values: [ 25, 75 ],
        slide: function( event, ui ) {
          $( "#amount" ).val( ui.values[ 0 ] );
          $( "#amount1" ).val( ui.values[ 1 ] );
        }

      });
      $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) );
      $( "#amount1" ).val( $( "#slider-range" ).slider( "values", 1 ) );

    </script>
</html>
