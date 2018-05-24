<!DOCTYPE html>
<html>
<head>
	<title>Check In House</title>
</head>
@extends('layout.principal')

@section('content')
<body>
	<div class="container-fluid">
		<div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
  		<div class="carousel-inner">

    	   <div class="carousel-item active"">
      	 	  <img class="d-block w-100" src="Imagenes/Auto-del-futuro.png" alt="Responsive image">
    	   </div>
    	   <div class="carousel-item">
      	   	<img class="d-block w-100" src="Imagenes/auto-rojo.jpg" alt="Responsive image">
    	   </div>
    	   <div class="carousel-item">
      	   	<img class="d-block w-100" src="Imagenes/auto-amarillo.jpeg" alt="Responsive image">
    	   </div>

  		</div>

  			<a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev">
    		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		  <span class="sr-only">Previous</span>
  			</a>
  			<a class="carousel-control-next" href="#carouselFade" role="button" data-slide="next">
    		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
    		  <span class="sr-only">Next</span>
  			</a>

		</div>
	</div>	
  <br>

    <div class="container text-center">
      <h5><Strong>Ventajas de confiar en Check In House</Strong></h5>
        <div class="row mt-3">
          <!--Primera columna Ventajas-->
          <div class="row col-md-2 offset-md-1">
            <img src="Imagenes/tiempo.png" class="mx-auto d-block">
            <h3> Tenemos reducción de tiempos</h3>
            <p>Check In House consigue reducir el tiempo empleado en <strong>planificar el arreglo de su auto</strong></p>
          </div>
          <!--Segunda columna Ventajas-->
          <div class="row col-md-3 offset-md-1">
            <img src="Imagenes/check.png" class="mx-auto d-block">
            <h3>Cumplimiento de horarios</h3>
            <p>Un requisito importante para cualquier persona es el cumplimiento de los tiempos. Check In House gestiona sus servicios teniendo en cuenta este factor.</p>
          </div>
          <!--Tercera columna Ventajas-->
          <div class="row col-md-3 offset-md-1">
            <img src="Imagenes/dinero.png" class="mx-auto d-block">
            <h3>Ahorro es la palabra clave</h3>
            <p>Conseguimos que se reduscan los costos de los servicios.</p>
          </div>

        </div>
    </div>
  <br>
</body>
</html>
@stop