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
        
        pre {
            white-space: pre-wrap;
            word-wrap: break-word;
            text-align: justify;
        }

	</style>
</head>
@extends('layout.principal')

@section('content')
<body>
<br>
<br>
<div class="container">
	<div id="cajaFrase">
		<cite id="frase"><h3><q>Contamos con diversos servicios para ofrecer,<br> en los que destacan Limpieza, Lubricación y Electricidad.<br>
			Estos servicios serán realizados por nosotros<br> en el lugar y hora que prefiera</q></h3></cite>
	</div>
	<hr style="background-color: black;">

</div>
	

<div class="container">
    <br>
    <div class="container">
        <h3>Vehiculos Livianos</h3>
    	<div class="row justify-content-center col-md-12 col-12 col-lg-12">
			
        @foreach($categoriasVl as $categoriavl)
		<a href="" data-toggle="modal" data-target="#{{$categoriavl->id}}"><span><div id="imagenCA">
		    		<img src="/storage/{{$categoriavl->foto}}" style="width: 100%;">
		    		</div><p style="color: #000; text-align: center;">{{$categoriavl->titulo}}</p></span></a>	
        @endforeach	  
		</div><br><br>
		<hr style="background-color: black;">
		<br>
		<h3>Vehiculos Pesados</h3>
    	<div class="row justify-content-center col-md-12 col-12 col-lg-12">
			
        @foreach($categoriasVp as $categoriavp)
		<a href="" data-toggle="modal" data-target="#{{$categoriavp->id}}"><span><div id="imagenCA">
		    		<img src="/storage/{{$categoriavp->foto}}" style="width: 100%;">
		    		</div><p style="color: #000; text-align: center;">{{$categoriavp->titulo}}</p></span></a>	
        @endforeach	  
		</div><br><br>
       

        @foreach($categoriasVl as $categoriavl)
	  <!--  <div class="row col-sm-12 col-md-12 col-12 col-lg-12" style="border: 2px solid #00FF00; border-bottom-left-radius: 50px; border-bottom-right-radius: 50px;">
  			<div id="">
  				<div id="cajaTextoAceite">
  					
  				</div><br>
  					<div class="row col-sm-12 col-md-12 col-12 col-lg-12">
                        <div class="col-sm-12 col-md-12 col-12 col-lg-12">
                         
                             <strong><pre></pre></strong>

                            <br><br>
						</div>
                   
						
         			</div>

 
            </div>
        </div> -->

		<!-- Modal vl-->
	<div class="modal fade" id="{{$categoriavl->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel"><img src="/storage/{{$categoriavl->foto}}" style="width: 10%;">{{$categoriavl->titulo}}</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<strong><pre>{{$categoriavl->descripcion}}</pre></strong>

		</div>
		<div class="modal-footer">
		<a href="{{url('serviciosss')}}" class="btn btn-success">Agenda ahora</a>
		 <!--<button type="button" class="btn btn-success">Agenda ahora</button> -->
		 <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> -->
		  
		</div>
	  </div>
	</div>
  </div>


    
    
    <br><br>
	@endforeach
	@foreach($categoriasVp as $categoriavp)
     <!-- Modal vp-->
	<div class="modal fade" id="{{$categoriavp->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel"><img src="/storage/{{$categoriavp->foto}}" style="width: 10%;">{{$categoriavp->titulo}}</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<strong><pre>{{$categoriavp->descripcion}}</pre></strong>
	
			</div>
			<div class="modal-footer">
			<a href="{{url('serviciosss')}}" class="btn btn-success">Agenda ahora</a>
			 <!--<button type="button" class="btn btn-success">Agenda ahora</button> -->
			 <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> -->
			  
			</div>
		  </div>
		</div>
	  </div>
	  @endforeach
</div>
  
</div>
<br>






		
 <div class="container">
   
    <div style="text-align: center;">Icons made by <a href="https://www.flaticon.es/autores/eucalyp" title="Eucalyp">Eucalyp</a> from <a href="https://www.flaticon.es/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
</div>
</body>
</html>
@stop