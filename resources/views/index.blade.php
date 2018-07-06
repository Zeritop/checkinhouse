<!DOCTYPE html>
<html>
<head>
	<title>Check In House</title>
</head>
@extends('layout.principal')

@section('content')
<body>
	<div class="container-fluid  shadow p-3 mb-5 bg-white rounded">
		<div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
  		<div class="carousel-inner">

    	   <div class="carousel-item active">
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
      <hr style="background-color: #E8F312; height: 1px;">
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
            <p>Conseguimos que se reduzcan los costos de los servicios.</p>
          </div>

        </div>
        <hr style="background-color: #E8F312; height: 1px;">
    </div>
  <br>

<div class="container">
  <div class="row">
    <div class="col-md-6"> 
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d799.1869344951222!2d-73.11058867078533!3d-36.752625724218824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96683549c6c1e56d%3A0xff62291ec117d3b8!2sVallenar+259%2C+Talcahuano%2C+Regi%C3%B3n+del+B%C3%ADo+B%C3%ADo!5e0!3m2!1ses-419!2scl!4v1527303646883" width="550" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>      
    

  <div class="col-md-6 ml-auto"> 
     <iframe src="https://www.google.com/maps/embed?pb=!4v1527303539925!6m8!1m7!1sVDvWsV2U1MfAZ_8Qm3gtFQ!2m2!1d-36.75246114541383!2d-73.11001080442982!3f59.4698515728279!4f-16.53824635021698!5f0.7820865974627469" width="550" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
          
      </div>
  </div>
</div>
  

</body>
</html>
@stop