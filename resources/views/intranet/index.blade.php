@extends('intranet.layout.ultimo')

@section('content')
<div class="content">
	<div class="col-lg-12 col-md-12">
		<div class="card">
			 <div class="card-header card-header-info">
			 	<h4 class="card-title">Bienvenido!</h4>
			 	<p class="card-category">Administrador {{ auth()->user()->name }}</p>
			 </div>
			 <div class="card-body">
				<img src="Imagenes/cih.svg">			 	
			 </div>
		</div>
	</div>
</div>
 

        
    
   


   




@stop