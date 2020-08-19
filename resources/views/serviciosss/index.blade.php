
<!DOCTYPE html>
<html>
<head>
    <title>Programar servicios</title>
    <link rel="stylesheet" type="text/css" href="css/programarservicios.css">
    <link rel="shortcut icon" type="image/x-icon" href="Imagenes/definitivo.ico">


    <!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />


	<!-- CSS Files -->
	<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

    </head>


<body>
@extends('layout.principal')

@section('content')



<div class="image-container set-full-height" style="background-image: url('assets/img/wizard-book.jpg')">
  @if (Session::has('message'))
  <div class="alert alert-success text-center">
  <p>{{ Session::get('message') }}</p>
  </div>
  @endif
	    <!--   Big container   -->
	    <div class="container">
            <div id="cajaImagen" class="row col-md-6 d-none d-sm-none d-md-block ">
              <img src="Imagenes/sevicios-profesionales.jpg" id="imgTipo" class="d-none d-sm-none d-md-block">
              </div>
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="green" id="wizard">
                    <!-- Inicio del Formulario -->
		                    <form action="{{route('mail.store')}}" method="POST">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->
                    <div class="container text-center">
                      <div class="alert alert-warning" role="alert">
                        Recuerda llenar todos los campos.
                      </div>
                  </div>
		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		Programa Tus Servicios
		                        	</h3>
									<h5>Esta información es para poder realizar el servicio adecuadamente.</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">Datos Personales</a></li>
			                            <li><a href="#captain" data-toggle="tab">Datos Vehiculo</a></li>
			                            <!--<li><a href="#description" data-toggle="tab">Extra Details</a></li>-->
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="details">
		                            	<div class="row">
			                            	<div class="col-sm-12">
			                                	<h4 class="info-text"> Comencemos con sus datos.</h4>
			                            	</div>

		                                	<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">Correo Electronico</label>
			                                          	<input name="email" type="email" class="form-control" required="">
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">Nombre</label>
			                                          	<input name="nombre" type="text" class="form-control" required="">
			                                        </div>
												</div>

		                                	</div>
                                            <div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">work</i>
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">Empresa (opcional)</label>
			                                          	<input name="empresa" type="text" class="form-control">
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">call</i>
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">Telefono</label>
			                                          	<input name="telefono" type="text" class="form-control" required="">
			                                        </div>
												</div>

		                                	</div>

                                            <div class="col-sm-12">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                    <i class="material-icons">place</i>
                                                </span>

                                                <div class="form-group label-floating">
                                                    <label class="control-label">Dirección</label>
                                                    <input name="dir" type="text" class="form-control" required="">
                                                </div>
                                            </div>

                                            </div>

		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="captain">
		                                <h4 class="info-text">Datos de su vehiculo y fecha. </h4>
		                                <div class="row">
                                         <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">directions_car</i>
                                                </span>

                                                <div class="form-group label-floating">
                                                    <label class="control-label">Patente</label>
                                                    <input name="patente" type="text" class="form-control" required="">
                                                </div>
                                            </div>
                                         </div>

                                        <div class="col-sm-6">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Marca</label>
	                                        		<select class="form-control" name="marca" required="">
														                  <option disabled="" selected=""></option>
	                                                	<option>Audi</option>
                                                        <option>Bentley</option>
                                                        <option>BMW</option>
                                                        <option>Chevrolet</option>
                                                        <option>Citroen</option>
                                                        <option>Dodge</option>
                                                        <option>Fiat</option>
                                                        <option>Ford</option>
                                                        <option>Honda</option>
                                                        <option>Hyundai</option>
                                                        <option>Izusu</option>
                                                        <option>Iveco</option>
                                                        <option>Jaguar</option>
                                                        <option>Jeep</option>
                                                        <option>Kia Motors</option>
                                                        <option>Lexus</option>
                                                        <option>Mahindra</option>
                                                        <option>Mazda</option>
                                                        <option>Mercedes-Benz</option>
                                                        <option>Mitsubishi</option>
                                                        <option>Nissan</option>
                                                        <option>Opel</option>
                                                        <option>Peugeot</option>
                                                        <option>Renault</option>
                                                        <option>Saab</option>
                                                        <option>Seat</option>
                                                        <option>Skoda</option>
                                                        <option>SsangYong</option>
                                                        <option>Subaru</option>
                                                        <option>Suzuki</option>
                                                        <option>Tata</option>
                                                        <option>Toyota</option>
                                                        <option>Volkswagen</option>
                                                        <option>Volvo</option>
		                                        	</select>
		                                    	</div>

		                                	</div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">directions_car</i>
                                                    </span>

                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Modelo</label>
                                                        <input name="modelo" type="text" class="form-control" required="">
                                                     </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                            <div class="form-group label-floating">
		                                        	<label class="control-label">Año</label>
	                                        		<select class="form-control" name="ano" required="">
														<option disabled="" selected=""></option>
                                                        @for($i = 1980; $i <=  date('Y') ; $i++)
                                                        <option>{{ $i }}</option>
                                                        @endfor

		                                        	</select>
		                                    	</div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">calendar_today</i>
                                                    </span>

                                                    <div class="form-group label-floating">
		                                        	    <label class="control-label">Día</label>
	                                        		      <input type="date" name="dia" class="form-control">
		                                    	    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group label-floating">
		                                        	<label class="control-label">Hora</label>
	                                        		    <select class="form-control" name="hora" required="">

														    <option disabled="" selected=""></option>
                                                            <option>8:30</option>
                                                            <option>9:00</option>
                                                            <option>9:30</option>
                                                            <option>10:00</option>
                                                            <option>10:30</option>
                                                            <option>11:00</option>
                                                            <option>11:30</option>
                                                            <option>12:00</option>
                                                            <option>12:30</option>
                                                            <option>13:00</option>
                                                            <option>13:30</option>
                                                            <option>14:00</option>
                                                            <option>14:30</option>
                                                            <option>15:00</option>
                                                            <option>15:30</option>
                                                            <option>16:00</option>
                                                            <option>16:30</option>
                                                            <option>17:00</option>
                                                            <option>17:30</option>
		                                        	    </select>
		                                    	</div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">build</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label  class="control-label">Servicios</label>

                                                        <select name="servicio" class="form-control" required="">
                                                            @foreach($servicios as $servicio)
                                                            <option disabled="" selected=""></option>
                                                            <option>{{$servicio->nombre}}</option>

                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

		                                </div>

		                            </div>

		                        </div>
	                        	<div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Siguiente' />
                                      @auth
                                      <button type="submit" class="btn btn-finish btn-success btn-wd" name="finish">Enviar</button>
                                      @endauth
                                      @guest
                                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Iniciar Sesion">
                                        <button type="submit" class="btn btn-finish btn-success btn-wd" name="finish" disabled>Enviar (Iniciar Sesion)</button>
                                        </span>
                                      @endguest
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Atras' />
	                                </div>
                                  </form>
	                                <div class="clearfix"></div>
	                        	</div>

		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

	    <br>
	</div>


    <div class="container text-center">
    <div class="alert alert-success" role="alert">
  Un encargado se comunicará con usted en los proximos 60 minutos.
</div>
    <div class="alert alert-info" role="alert">
  FECHA: Se programa atencion con un minimo de 48 horas
</div>
<!--<div class="alert alert-info" role="alert">
  HORA: Se efectúa un recargo adicional ($5.000) por extenciones entre las 20:00 hrs y 08:00 hrs
</div>-->
</div>



<div class="footer">
	        <div class="container text-center">
	             Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>.
	        </div>
	    </div>
@stop

</body>

</html>
