<!DOCTYPE html>
<html>
<head>
	<title>Programar servicios</title>
    <link rel="stylesheet" type="text/css" href="css/programarservicios.css">
    <link rel="shortcut icon" type="image/x-icon" href="Imagenes/definitivo.ico">
	</head>
<body>
@extends('layout.principal')

@section('content')
<br>
<div class="container text-center">
	<h2 style="color: #04B45F;">PROGRAMAR SERVICIOS</h2>
	
</div>
<div class="container text-center">
	<div class="alert alert-warning" role="alert">
  Recuerda llenar todos los campos.
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
    <div class="row justify-content-center col-md-12 col-12 col-sm-12 col-lg-6 ml-auto" id="formulario">
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <!--  {!!Form::open(['route'=> 'mail.store', 'method'=> 'POST'])!!} -->
    <form action="{{url('cotizacion')}}" method="get">
          
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  	<div class="col-md-12">
		<div class="form-group"><br>
	  
        

	   <div class="form-group">
    <label for="exampleFormControlSelect1">Servicios</label>
    <select class="form-control" id="exampleFormControlSelect1" name="servicio">
      <option>Cambio de Aceites</option>
      <option>Diagnostico General</option>
      <option>Mantencion Frenos</option>
    </select></div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Precio</label>
    <select class="form-control" id="exampleFormControlSelect1" name="precio">
      
     
      
   
    
  </div>
 @foreach ($servicios as $servicio)
   
        
        <option>{{ $servicio->nombre}}</option>
        
      
       

 
        
        
    @endforeach
 </select>
   
	  <button type="submit" class="btn btn-primary">Enviar</button>
	  <br><br>
     </form>   
   <!-- {!!Form::close()!!}-->
</div> 
</div>
</div>
</div>
    
</div>
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




@stop
</body>
</html>