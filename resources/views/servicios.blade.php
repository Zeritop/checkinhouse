<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title>Servicios</title>
	<link rel="stylesheet" type="text/css" href="css/servicios.css">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<style>
		img{
			max-height: 250px;
		}

	</style>
</head>
@extends('layout.principal')

@section('content')
<body>
<br>
<div class="container text-center">
	<h2 style="color: #04B45F;">SERVICIOS</h2>
</div>

<div class="container text-center">
	<h5>Contamos con diversos servicios para ofrecer, en los que destacan Limpieza, Lubricación y Electricidad.<br>
		Estos servicios serán realizados por nosotros en el lugar y hora que prefiera:</h5>
</div>
<br>
<br>
	
<div class="container">
    
    <div class="container">
    	<div class="row justify-content-center col-md-12 col-12 col-lg-12">
	
		    	<a href="#aceite"><span><div id="imagenCA">
		    		<img src="Imagenes/engine-oil.png" style="width: 100%;">
		    		</div><p style="color: #000;">Cambio de Aceite</p></span></a>
		    		<a href="#diagnostico"><span><div id="imagenCA">
		    		<img src="Imagenes/diagnosticoGeneral.png" style="width: 100%;">
		    		</div><p style="color: #000;">Diagnostico General</p></span></a>
		    		<a href="#freno"><span><div id="imagenCA">
		    		<img src="Imagenes/freno.png" style="width: 100%;">
		    		</div><p style="color: #000;">Mantención Frenos</p></span></a>
		  
		</div><br><br>

	<div class="row col-sm-12 col-md-12 col-12 col-lg-12" style="border: 2px solid #00FF00; border-bottom-left-radius: 50px; border-bottom-right-radius: 50px;">
  			<div id="aceite">
  				<div id="cajaTextoAceite">
  					La lubricación es de vital importancia para la vida útil de su vehiculo, teniendo como función evitar o reducir al maximo el desgaste entre las diferentes piezas metalicas que componen el automovil. Es por esto que nuestro servicio de lubricación cuenta con marcas con altos estandares de funcionamiento que garantizan la correcta lubricación de su vehiculo.
  				</div><br>
  					<div class="row">
                         <div class="col-md-6">
							<ul class="list-unstyled">	
							  <li class="media">
							      <div class="d-none d-sm-block">
							           
							      </div>
							    
						   			<div class="media-body">
							      		<h5 class="mt-0 mb-1">ACEITE 5W40</h5>
							      		<strong>ACEITE:</strong> ACDELCO sintetico <br> <strong>RECOMENDACIÓN:</strong> 10 mil Kilometros<br><strong>DESCRIPCIÓN:</strong> API SN/CF  ACEA A3/B4 5W40.<br> <strong>ORIGEN:</strong> Belgica.
						    		</div>
							  </li>
						</div>

						<div class="col-sm-6 col-md-6">
		  					<li class="media my-4">
		  					    <div class="d-none d-sm-block">
		  					            
		  					    </div>
		    						<div class="media-body">
		      							<h5 class="mt-0 mb-1">ACEITE 10W40</h5>
		    								<strong>ACEITE:</strong> ACDELCO SSynt<br> <strong> RECOMENDACIÓN:</strong>7.5 mil Kilometros<br> <strong>DESCRIPCIÓN:</strong> ACEA A3/B3-10 ACEA A3/B4-08 API SN/CF MB 229.1.<br> <strong> ORIGEN:</strong> Belgica.
		    						</div>
		  					</li>
						</div>
							</ul>
         			</div>

         			<div class="row">
						<div class="col-md-6">
							<ul class="list-unstyled">
								<li class="media">
								    <div class="d-none d-sm-block">
								            
								    </div>
									
									<div class="media-body">
										<h5 class="mt-0 mb-1">ACEITE 20W50</h5>
											<strong>ACEITE:</strong> MINERAL WILLIAMS<br><strong>RECOMENDACIÓN:</strong> 5 mil Kilometros<br> <strong>DESCRIPCIÓN:</strong> GT WP-5 API SL/CH-4.<br> <strong>ORIGEN:</strong> Belgica.
									</div>
								</li>
						</div>

						<div class="col-md-6">
							<li class="media my-4">
							    <div class="d-none d-sm-block">
							            
							    </div>
								
								<div class="media-body">
									<h5 class="mt-0 mb-1">ACEITE 5W30</h5>
									<strong>ACEITE:</strong> ACDELCO SINTETICO<br><strong>RECOMENDACIÓN</strong> 10 mil Kilometros<br><strong>DESCRIPCIÓN:</strong> DEXOS2 ACEA C3 API SN/CF FILTRO ORIGINAL.<br><strong>ORIGEN:</strong> Belgica.
								</div>
							</li>
						</div>
							</ul>

						</div>
 
            </div>
        </div>
    </div>
    
    <br><br>
	<div class="container">
	<div class="row col-sm-12 col-md-12 col-12 col-lg-12" style="border: 2px solid #00FF00; border-bottom-left-radius: 50px; border-bottom-right-radius: 50px;">
	<div id="diagnostico">
		<div id="cajaTextoAceite" style="text-transform: uppercase;">
		Revisión completa del automóvil de más de 100 puntos que contempla cinco aspectos generales o sistemas a diagnosticar.
		</div>
		<br>
    	 <ul>
    	 	<li>Seguridad en Ruta: Freno, dirección, suspensión.</li>
    	 	<li>Motor: Medición de compresión, estado de componentes (inspección visual), estado aceite, estado refrigerante.</li>
    	 	<li> Transmisión: Estado de componentes (inspección visual), pruebas de funcionamiento en ruta, estado embrague, estado lubricante.</li>
    	 	<li>Eléctrico: Sistema de carga, sistema de arranque, estado de accesorios y redes en general.</li>
    	 </ul>	     

    </div>
	</div>
	
</div>

<br><br>
	<div class="container">
	<div class="row col-sm-12 col-md-12 col-12 col-lg-12" style="border: 2px solid #00FF00; border-bottom-left-radius: 50px; border-bottom-right-radius: 50px;">
		<div id="freno">
			<div id="cajaTextoAceite" style="text-transform: uppercase;">
				El sistema conlleva en su área mecánica, freno de servicio, freno de estacionamiento, servo freno, cañerías del sistema, cilindro primario y secundario, y válvulas hidráulicas. 
			</div><br>
			Este servicio consta de la revisión de cada parte del sistema, limpieza, mantención y reparación (cambio de piezas consumibles, como pastillas, balatas, tambores y/o discos). Llevado a cabo con insumos de primera calidad marca WURTH.<br> *Este servicio tiene incluido el uso de anti cristalizante de frenos, anti chirrido, limpia-frenos, liquido de freno, grasa para pasador. 

			<br><br>
		</div>
	</div>
	</div>
	


</div><br>






		
 <div class="container">
   
    <div style="text-align: center;">Icons made by <a href="https://www.flaticon.es/autores/eucalyp" title="Eucalyp">Eucalyp</a> from <a href="https://www.flaticon.es/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
</div>
</body>
</html>
@stop