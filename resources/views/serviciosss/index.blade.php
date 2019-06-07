
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
<?php 
use Illuminate\Support\Facades\DB;
?>

    
<body>
@extends('layout.principal')

@section('content')

<<<<<<< HEAD
<div style="background-color: #3ADF00;" id="cajaForm" class="col-sm-12 ml-auto">
    <div class="row justify-content-center col-md-12 col-12 col-sm-12 col-lg-6 ml-auto" id="formulario">
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <!--{!!Form::open(['route'=> 'mail.store', 'method'=> 'POST'])!!}-->
    <form action="{{url('cotizacion')}}" method="get">
          <div class="col-md-12">
         <div class="form-group"><br>
   <label>Nombre:</label><br> <input type="text" class="form-control" name="nombre" placeholder="Nombre Completo" required></div>
    <div class="form-group">
   <label>Empresa:</label><br> <input type="text" class="form-control" name="empresa" placeholder="Opcional" ></div>
    <div class="form-group">
    <label>Teléfono:</label><br> <input type="text" class="form-control" name="telefono" placeholder="912345678" required></div>
    
    <div class="form-group">
    <label>Correo Electrónico:</label><br> <input type="email" class="form-control" name="email"  placeholder="ejemplo@algo.com" required></div>
    
   <!-- <div class="form-group">
   <label> RUT:</label><br> <input type="text" class="form-control" placeholder="123456789" name="rut"></div>-->
   
    <div class="form-group">
   <label> Dirección:</label> <br><input type="text" class="form-control" name="dir" placeholder="calle hola 123" required></div><br><br><br><br>
   <!--
    <div class="form-group">
    <label>Comuna:</label> <br><input type="text" class="form-control" name="comuna" placeholder="Talcahuano" required></div>-->
    </div>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="col-md-12">
        <div class="form-group"><br>
        <label>Patente:</label> <br><input type="text" class="form-control" name="patente" placeholder="AAXZ98" required></div>
        
         <div class="form-group">
    <label for="exampleFormControlSelect1">Marca:</label>
    <select class="form-control" id="exampleFormControlSelect1" name="marca">
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
        
        <div class="form-group">
        <label>Modelo:</label> <br><input type="text" class="form-control" name="modelo" placeholder="Modelo del auto" required></div>
        

        <div class="form-group">
    <label for="exampleFormControlSelect1">Año:</label>
    <select class="form-control" id="exampleFormControlSelect1" name="ano">
      <option>1980</option>
      <option>1981</option>
      <option>1982</option>
      <option>1983</option>
      <option>1984</option>
      <option>1985</option>
      <option>1986</option>
      <option>1987</option>
      <option>1988</option>
      <option>1989</option>
      <option>1990</option>
      <option>1991</option>
      <option>1992</option>
      <option>1993</option>
      <option>1994</option>
      <option>1995</option>
      <option>1996</option>
      <option>1997</option>
      <option>1998</option>
      <option>1999</option>
      <option>2000</option>
      <option>2001</option>
      <option>2002</option>
      <option>2003</option>
      <option>2004</option>
      <option>2005</option>
      <option>2006</option>
      <option>2007</option>
      <option>2008</option>
      <option>2009</option>
      <option>2010</option>
      <option>2011</option>
      <option>2012</option>
      <option>2013</option>
      <option>2014</option>
      <option>2015</option>
      <option>2016</option>
      <option>2017</option>
      <option>2018</option>
      <option>2019</option>
    </select>
  </div>
        

        <div class="form-group">
    <label for="exampleFormControlSelect1">Servicios</label>
     <br>
<select name="servicio" class="form-control" id="exampleFormControlSelect1">
    @foreach($servicios as $servicio)
    <option>{{$servicio->nombre}}</option>

    @endforeach
</select>


         
    
   </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Dia</label>
    <select class="form-control" id="exampleFormControlSelect1" name="dia">
      <option>Lunes</option>
      <option>Martes</option>
      <option>Miercoles</option>
      <option>Jueves</option>
      <option>Viernes</option>
      <option>Sabado</option>
      <option>Domingo</option>
     
    </select>
  </div>
   <div class="form-group">
    <label for="exampleFormControlSelect1">Hora</label>
    <select class="form-control" id="exampleFormControlSelect1" name="hora">
      <?php $horarios = DB::table('horarios')->where('lugar', 'taller')->where('ocupado',0)->orderBy('id', 'ASC')->get();?><option disabled>Taller</option>
      @foreach($horarios as $horario)
            
            <option>{{$horario->horai}}</option>
           
            @endforeach 
            <option disabled>Terreno No Disponible</option>
    </select>
  </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
      <br><br>
      </form>  
    <!--{!!Form::close()!!}-->
</div> 
</div>
</div>
</div>
    
</div>
</div>
=======

<div class="image-container set-full-height" style="background-image: url('assets/img/wizard-book.jpg')">
 
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
		                    <form action="{{url('cotizacion')}}" method="get">
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
	                                                	<option>1980</option>
                                                        <option>1981</option>
                                                        <option>1982</option>
                                                        <option>1983</option>
                                                        <option>1984</option>
                                                        <option>1985</option>
                                                        <option>1986</option>
                                                        <option>1987</option>
                                                        <option>1988</option>
                                                        <option>1989</option>
                                                        <option>1990</option>
                                                        <option>1991</option>
                                                        <option>1992</option>
                                                        <option>1993</option>
                                                        <option>1994</option>
                                                        <option>1995</option>
                                                        <option>1996</option>
                                                        <option>1997</option>
                                                        <option>1998</option>
                                                        <option>1999</option>
                                                        <option>2000</option>
                                                        <option>2001</option>
                                                        <option>2002</option>
                                                        <option>2003</option>
                                                        <option>2004</option>
                                                        <option>2005</option>
                                                        <option>2006</option>
                                                        <option>2007</option>
                                                        <option>2008</option>
                                                        <option>2009</option>
                                                        <option>2010</option>
                                                        <option>2011</option>
                                                        <option>2012</option>
                                                        <option>2013</option>
                                                        <option>2014</option>
                                                        <option>2015</option>
                                                        <option>2016</option>
                                                        <option>2017</option>
                                                        <option>2018</option>
                                                        <option>2019</option>
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
	                                        		    <select class="form-control" name="dia" required="">
														    <option disabled="" selected=""></option>
                                                            <option>Lunes</option>
                                                            <option>Martes</option>
                                                            <option>Miercoles</option>
                                                            <option>Jueves</option>
                                                            <option>Viernes</option>
                                                            <option>Sabado</option>
                                                            <option>Domingo</option>
		                                        	    </select>
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
	                            
                                      <button type="submit" class="btn btn-finish btn-success btn-wd" name="finish">Enviar</button>
                                      
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
>>>>>>> seba

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