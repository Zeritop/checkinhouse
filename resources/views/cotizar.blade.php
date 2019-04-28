<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/programarservicios.css">




	</head>
<body>
	@extends('layout.principal')

@section('content')
<br>

	<div class="container text-center">
	<h2>PROGRAMAR SERVICIOS</h2>
	<hr style="background-color: #E8F312; height: 1px;">
</div>
<div class="container">
	<div class="alert alert-warning" role="alert">
  Recuerda llenar todos los campos correspondientes.
	</div>
</div>	

	<div class="container">
	<div id="cajaNav" style="background-color: #3ADF00;" class="col-sm-12 ml-auto">
		<div class="row justify-content-center col-12 col-sm-12 col-md-12  col-lg-8 ml-auto">
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Datos Personales</a>
					<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Datos Vehiculo</a>
				</div>
			</nav>		
		</div>
	</div>	
		<div id="cajaImagen" class="row justify-content-center col-md-6 d-none d-sm-none d-md-block">
		<img src="Imagenes/tipo.jpg" id="imgTipo" class="d-none d-sm-none d-md-block">	
		</div>	
		
	
	<div style="background-color: #3ADF00;" id="cajaForm" class="col-sm-12 ml-auto">
		<div class="row justify-content-md-center col-md-12 col-12 col-sm-12 col-lg-6 ml-auto" id="formulario">
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
	  {!!Form::open(['route'=>'mail.store', 'method'=>'POST']) !!}
		<div class="col-md-12">
		 <div class="form-group">
		 	<br>
	    <label>Nombre:</label><br>
	    {!! Form::text('nombre', '', array('class' => 'form-control', 'placeholder' => 'Nombre completo', 'required' => '')) !!}
	    <!--<input class="form-control" type="text" name="nombre" placeholder="Nombre" required="">-->
</div>	
	  <div class="form-group">
	    <label>Telefono:</label><br>
	    <input class="form-control" type="tel" name="telefono" placeholder="912345678" required="">
	  </div>	
		
	 <div class="form-group">
	    <label>Correo Electronico:</label><br>
	    <input class="form-control" type="mail" name="correo" placeholder="nombre@algo.com" required="">
	  </div>
	 
	  <div class="form-group">
	    <label>Rut:</label><br>
	    <input class="form-control" type="text" name="rut" placeholder="123456789" required="">
	  </div>
	  <div class="form-group">
	    <label>Dirección del servicio:</label><br>
	    <input class="form-control" type="text" name="direccion" placeholder="Calle falsa 123" required="">
	  </div>
	  <div class="form-group">
	    <label>Comuna:</label><br>
	    <input class="form-control" type="text" name="comuna" placeholder="Talcahuano" required="">
	  </div>
	  
	  </div>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  	<div class="col-md-12">
		<div class="form-group"><br>
	    <label>Patente:</label><br>
	    <input class="form-control" type="text" name="patente" placeholder="AAXZ98" required="">
	  </div>
	  <div class="form-group">
	    <label>Marca:</label><br>
	    <input class="form-control" type="text" name="marca" placeholder="Marca del auto" required="">
	  </div>
	  <div class="form-group">
	    <label>Modelo:</label><br>
	    <input class="form-control" type="text" name="modelo" placeholder="Modelo auto" required="">
	  </div>
	  <div class="form-group">
	    <label>Año:</label><br>
	    <input class="form-control" type="text" name="ano" placeholder="Año del auto" required="">
	  </div>

	   <div class="form-group">
    <label for="exampleFormControlSelect1">Servicios</label>
    <select class="form-control" id="exampleFormControlSelect1" name="servicio">
      <option>Cambio de Aceites</option>
      <option disabled="">Limpieza</option>
      <option disabled="">Electricidad</option>
    </select>
  </div>
	  <button type="submit" class="btn btn-primary">Enviar</button><br><br>
	{!!Form::close()!!}

	</div>
	  
	  </div>
</div>
</div>
	</div>






		
	


	<div class="alert alert-success" role="alert">
  Un encargado se comunicará con usted en los proximos 60 minutos.
</div>
	<div class="alert alert-info" role="alert">
  FECHA: Se programa atencion con un minimo de 72 horas
</div>
<div class="alert alert-info" role="alert">
  HORA: Se efectúa un recargo adicional por extenciones entre las 21:00 hrs y 08:00 hrs
</div>
</div>	
</div>

@stop
</body>
</html>


