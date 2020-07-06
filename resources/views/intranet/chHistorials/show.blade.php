@extends('intranet.layout.ultimo')


@section('content')
<div class="content">
    <div class="card">
        <div class="card-header card-header-info">
            <h2> Detalle Tarea <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('chHistorials.index') }}">Atras</a>
            </div></h2>
        </div>
        <div class="card-body">
            <div class="row">
              @foreach($ch_histo as $histo)
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx1 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea1 }}</label>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx2 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea2 }}</label>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx3 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea3 }}</label>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx4 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea4 }}</label>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx5 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea5 }}</label>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx6 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea6 }}</label>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx7 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea7 }}</label>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx8 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea8 }}</label>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx9 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea9 }}</label>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx10 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea10 }}</label>
                </div>
              </div>
              @if($histo->tarea11 != null)
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx11 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea11 }}</label>
                </div>
              </div>
              @endif

              @if($histo->tarea12 != null)
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx12 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea12 }}</label>
                </div>
              </div>
              @endif

              @if($histo->tarea13 !=null)
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx13 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea13 }}</label>
                </div>
              </div>
              @endif

              @if($histo->tarea14 != null)
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx2 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea14 }}</label>
                </div>
              </div>
              @endif

              @if($histo->tarea15 != null)
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx15 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea15 }}</label>
                </div>
              </div>
              @endif

              @if($histo->tarea16 != null)
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx16 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea16 }}</label>
                </div>
              </div>
              @endif

              @if($histo->tarea17 != null)
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx17 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea17 }}</label>
                </div>
              </div>
              @endif

              @if($histo->tarea18 != null)
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx18 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea18 }}</label>
                </div>
              </div>
              @endif

              @if($histo->tarea19 != null)
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx19 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea19 }}</label>
                </div>
              </div>
              @endif

              @if($histo->tarea20 !=null)
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @if($histo->chbx20 != null)
                  <span class="material-icons">
                    check_circle_outline
                  </span>
                  @else
                  <span class="material-icons">
                    clear
                  </span>
                  @endif
                  <label>{{ $histo->tarea20 }}</label>
                </div>
              </div>
              @endif

              <div class="col-xs-12 col-sm-12 col-md-12">

                  <label>Rut Cliente:</label>
                  {{ $histo->rut_real_his }}

              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">

                  <label>Patente:</label>
                  {{ $histo->patente_real_his }}

              </div>
              @if($histo->comentario_real != null)
              <div class="col-xs-12 col-sm-12 col-md-12">

                  <label>Comentario:</label>
                  {{ $histo->comentario_real }}

              </div>
              @else
              <div class="col-xs-12 col-sm-12 col-md-12">

                  <label>Comentario:</label>
                  No hay comentarios

              </div>
              @endif

              <div class="col-xs-12 col-sm-12 col-md-12">

                  <label>Tarea:</label>
                  {{ $histo->nombre_gen_his }}

              </div>
              @endforeach
            </div>

        </div>
    </div>
</div>


@endsection
