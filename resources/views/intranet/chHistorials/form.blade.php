<div class="row">
  @foreach($id_gnr as $rng)
  @if($rng->chbx1 == true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx1" id="chbx1" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea1 }}

      </label>
    </div>

  </div>
  @else
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx1" id="chbx1">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea1 }}

      </label>
    </div>

  </div>
  @endif
  @if($rng->chbx2 == true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx2" id="chbx2" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea2 }}

      </label>
    </div>

  </div>
  @else
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx2" id="chbx2">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea2 }}

      </label>
    </div>

  </div>
  @endif

  @if($rng->chbx3 == true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx3" id="chbx3" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea3 }}

      </label>
    </div>

  </div>
  @else
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx3" id="chbx3">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea3 }}

      </label>
    </div>

  </div>
  @endif

  @if($rng->chbx4 == true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx4" id="chbx4" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea4 }}

      </label>
    </div>

  </div>
  @else
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx4" id="chbx4">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea4 }}

      </label>
    </div>

  </div>
  @endif

  @if($rng->chbx5 == true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx5" id="chbx5" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea5 }}

      </label>
    </div>

  </div>
  @else
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx5" id="chbx5">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea5 }}

      </label>
    </div>

  </div>
  @endif

  @if($rng->chbx6 == true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx6" id="chbx6" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea6 }}

      </label>
    </div>

  </div>
  @else
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx6" id="chbx6">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea6 }}

      </label>
    </div>

  </div>
  @endif

  @if($rng->chbx7 == true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx7" id="chbx7" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea7 }}

      </label>
    </div>

  </div>
  @else
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx7" id="chbx7">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea7 }}

      </label>
    </div>

  </div>
  @endif

  @if($rng->chbx8 == true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx8" id="chbx8" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea8 }}

      </label>
    </div>

  </div>
  @else
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx8" id="chbx8">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea8 }}

      </label>
    </div>

  </div>
  @endif

  @if($rng->chbx9 == true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx9" id="chbx9" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea9 }}

      </label>
    </div>

  </div>
  @else
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx9" id="chbx9">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea9 }}

      </label>
    </div>

  </div>
  @endif

  @if($rng->chbx10 == true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx10" id="chbx10" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea10 }}

      </label>
    </div>

  </div>
@else
<div class="col-xs-12 col-sm-12 col-md-12">

  <div class="form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" value="" name="chbx10" id="chbx10">
        <span class="form-check-sign">
          <span class="check"></span>
        </span>

        {{ $rng->tarea10 }}

    </label>
  </div>

</div>
@endif

  @if($ext11->tarea11 != null)
    @if($rng->chbx11 == true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx11" id="chbx11" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea11 }}

      </label>
    </div>

  </div>
  @else
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx11" id="chbx11">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea11 }}

      </label>
    </div>

  </div>
  @endif
  @endif

  @if($ext12->tarea12 != null)
    @if($rng->chbx12 == true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx12" id="chbx12" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea12 }}

      </label>
    </div>

  </div>
  @else
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx12" id="chbx12">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea12 }}

      </label>
    </div>

  </div>
  @endif
  @endif

  @if($ext13->tarea13 != null)
    @if($rng->chbx13 ==  true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx13" id="chbx13" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea13 }}

      </label>
    </div>

  </div>
  @else
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx13" id="chbx13">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea13 }}

      </label>
    </div>

  </div>
  @endif
  @endif

  @if($ext14->tarea14 != null)
    @if($rng->chbx14 == true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx14" id="chbx14" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea14 }}

      </label>
    </div>

  </div>
  @else
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx14" id="chbx14">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea14 }}

      </label>
    </div>

  </div>
  @endif
  @endif

  @if($ext15->tarea15 != null)
    @if($rng->chbx15 == true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx15" id="chbx15" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea15 }}

      </label>
    </div>

  </div>
  @else
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx15" id="chbx15">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea15 }}

      </label>
    </div>

  </div>
  @endif
  @endif

  @if($ext16->tarea16 != null)
    @if($rng->chbx17 == true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx16" id="chbx16" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea16 }}

      </label>
    </div>

  </div>
  @else
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx16" id="chbx16">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea16 }}

      </label>
    </div>

  </div>
  @endif
  @endif

  @if($ext17->tarea17 != null)
    @if($rng->chbx17 == true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx17" id="chbx17" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea17 }}

      </label>
    </div>

  </div>
  @else
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx17" id="chbx17">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea17 }}

      </label>
    </div>

  </div>
  @endif
  @endif

  @if($ext18->tarea18 != null)
    @if($rng->chbx18 == true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx18" id="chbx18" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea18 }}

      </label>
    </div>

  </div>
  @else
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx18" id="chbx18">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea18 }}

      </label>
    </div>

  </div>
  @endif
  @endif

  @if($ext19->tarea19 != null)
    @if($rng->chbx19 == true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx19" id="chbx19" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea19 }}

      </label>
    </div>

  </div>
  @else
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx19" id="chbx19">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea19 }}

      </label>
    </div>

  </div>
  @endif
  @endif

  @if($ext20->tarea20 != null)
    @if($rng->chbx20 == true)
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx20" id="chbx20" checked>
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea20 }}

      </label>
    </div>

  </div>
  @else
  <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" name="chbx20" id="chbx20">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>

          {{ $rng->tarea20 }}

      </label>
    </div>

  </div>
  @endif
  @endif
  <div class="col-xs-12 col-sm-12 col-md-6">
    <label>Patente: </label>
    <input class="form-control" type="text" name="patente_real" value="{{ $rng->patente_real_his }}" required>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-6">
    <label>Rut cliente: </label>
    <input class="form-control" type="text" name="rut_real" value="{{ $rng->rut_real_his }}" required>

  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
    <label>Comentarios:</label>
    <textarea class="form-control" cols="25" rows="5" name="comentario_real">
      {{ $rng->comentario_real }}
    </textarea>

  </div>
  <div class="col-xs-12 col-sm-12 col-md-6">
    <label>Nombre del checkList: </label>
    <input class="form-control" type="text" name="" value="{{ $rng->titulo_gen }}" disabled>
    <input class="form-control" type="hidden" name="titulo_gen_real" value="{{ $rng->titulo_gen }}">

  </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
          <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
  @endforeach

</div>
