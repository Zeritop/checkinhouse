<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title>Cotizar</title>
	<link rel="shortcut icon" type="image/x-icon" href="Imagenes/definitivo.ico">

	<style>
		div #formulario{
			border-radius: 23px 23px 23px 23px;
			-moz-border-radius: 23px 23px 23px 23px;
			-webkit-border-radius: 23px 23px 23px 23px;
			border: 2px solid #000000;

			width: 300px;
			display: flex;
  			justify-content: center;
  			align-items: center;
  			position: relative;
  			left: 35%;	
		}
		
			@media screen and (max-width:640px){
  			div #formulario{
  				width: 75%;
  				left:15%;
  			}		
  		}

	</style>
	</head>
<body>
@extends('layout.principal')

@section('content')
<br>
<div class="container text-center">
	<h2 style="color: #04B45F;">COTIZAR</h2>
	
</div>
<div class="container text-center">
	<div class="alert alert-warning" role="alert">
  Recuerda llenar todos los campos.
</div>
<div class="container">
    	<div class="container text-center">
    	<div class="row justify-content-center col-md-12">
            <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Datos Personales</a>
    
  </div>
</nav>	    
    	</div>    
	
<br>
<div class="row justify-content-center" id="formulario">
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <form action="cotizacion" method="get">
          <div class="col-md-12">
		 <div class="form-group"><br>
   <label> Nombre:</label><br> <input type="text" class="form-control" name="nombre" placeholder="Nombre Completo" name="nombre" required></div>
    <div class="form-group">
    <label>Empresa:</label><br> <input type="text" name="empresa" class="form-control" name="telefono" placeholder="Nombre Empresa" ></div>
  
    
    <div class="form-group">
   <label> Dirección:</label> <br><input type="text" name="dir" class="form-control" name="direccion" placeholder="calle hola 123" required></div>
    <div class="form-group">
    <label>Telefono:</label> <br><input type="text" class="form-control" name="telefono" placeholder="Telefono" required></div>
     <div class="form-group">
    <label for="exampleFormControlSelect1">Servicios</label>
    <select class="form-control" id="exampleFormControlSelect1" name="servicio">
      <option>Cambio de Aceites</option>
      <option>Diagnostico General</option>
      <option>Mantencion Frenos</option>
    </select>
  </div>
    </div>
  </div>
 
        
        
        

	  
	  <button type="submit" class="btn btn-primary">Enviar</button>
	  <br><br>
        
    </form>
</div> 
</div>
</div>
</div>
<br>
<br>
	
	
</div>	
</div>
</div>


@stop
</body>
</html>