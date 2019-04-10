<!DOCTYPE html>
<html>
<head>
	<title>Programar servicios</title>
    <link rel="stylesheet" type="text/css" href="css/programarservicios.css">

	</head>
<body>
@extends('layout.principal')

@section('content')
<br>
<div class="container text-center">
	<h2 style="color: #04B45F;">PROGRAMAR SERVICIOS</h2>
	
</div>
<div class="container">
	<div class="alert alert-warning" role="alert">
  Recuerda llenar todos los campos.
</div>
</div>
<div class="container">
    
    	
 
    
    	</div> 
    	    </div>
    	    
    	    <div id="cajaImagen" class="row justify-content-center col-md-6 d-none d-sm-none d-md-block">
		<img src="Imagenes/tipo.jpg" id="imgTipo" class="d-none d-sm-none d-md-block">	
		</div>
    	   
	

<div style="background-color: #3ADF00;" id="cajaForm" class="col-sm-12 ml-auto">
    <div class="row justify-content-center col-md-12 col-12 col-sm-12 col-lg-6 ml-auto" id="formulario">
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <form action="correo" method="get">
          <div class="col-md-12">
		 <div class="form-group"><br>
   <label> Nombre:</label><br> <input type="text" class="form-control" name="nombre" placeholder="Nombre Completo" required></div>
    <div class="form-group">
    <label>Teléfono:</label><br> <input type="text" class="form-control" name="telefono" placeholder="912345678" required></div>
    
   
   
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
  <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    
  </div>
 
   
	  
	  <br><br>
        
    </form>
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
<div class="alert alert-info" role="alert">
  HORA: Se efectúa un recargo adicional ($5.000) por extenciones entre las 20:00 hrs y 08:00 hrs
</div>
</div>	




@stop
</body>
</html>