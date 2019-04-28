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
        @foreach($categorias as $categoria)
		    	<a href="#{{$categoria->nombre}}"><span><div id="imagenCA">
		    		<img src="/storage/{{$categoria->foto}}" style="width: 100%;">
		    		</div><p style="color: #000;">{{$categoria->nombre}}</p></span></a>	
        @endforeach	  
		</div><br><br>
       

        @foreach($categorias as $categoria)
	    <div class="row col-sm-12 col-md-12 col-12 col-lg-12" style="border: 2px solid #00FF00; border-bottom-left-radius: 50px; border-bottom-right-radius: 50px;">
  			<div id="{{$categoria->nombre}}">
  				<div id="cajaTextoAceite">
  					{{$categoria->titulo}}
  				</div><br>
  					<div class="row col-sm-12 col-md-12 col-12 col-lg-12">
                        <div class="col-sm-12 col-md-12 col-12 col-lg-12">
                         
                             <strong><pre>{{$categoria->descripcion}}</pre></strong>

                            <br><br>
						</div>
                   
						
         			</div>

 
            </div>
        </div>

    
    
    <br><br>
    @endforeach
    {!! $categorias->links() !!}
</div>
  
</div>
<br>






		
 <div class="container">
   
    <div style="text-align: center;">Icons made by <a href="https://www.flaticon.es/autores/eucalyp" title="Eucalyp">Eucalyp</a> from <a href="https://www.flaticon.es/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
</div>
</body>
</html>
@stop