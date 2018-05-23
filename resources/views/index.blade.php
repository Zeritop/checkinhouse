<!DOCTYPE html>
<html>
<head>
	<title>CIH</title>
</head>
@extends('layout.principal')

@section('content')
<body>
	<div class="container-fluid">
		<div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
  		<div class="carousel-inner">

    	<div class="carousel-item active">
      		<img class="d-block w-100" src="Imagenes/sombrero.jpg" alt="First slide">
    	</div>
    	<div class="carousel-item">
      		<img class="d-block w-100" src="Imagenes/niconiconiijojo.jpg" alt="Second slide">
    	</div>
    	<div class="carousel-item">
      		<img class="d-block w-100" src="Imagenes/allenWalker.jpg" alt="Third slide">
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

	<h1>WENA CABROS</h1>
</body>
</html>
@stop