


@extends('layout.principal')


@section('content')
<div class="cajaOscura">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cambio de Aceite</h2>
            </div>
            
        </div>
        <div class="pull-right">
                {{ Form::open(['route' => 'serviciosss.index', 'method' => 'GET', 'class' => 'form-inline']) }}
                    <div class="form-group">
                        {{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripcion'])}}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                    {{ Form::close() }}
            </div>
    </div>  


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
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
     <?php $i=0;  $cosa=array(); $cosa2=array();?>

<select name="servicio">
    @foreach($servicios as $servicio)
    <option>{{$servicio->nombre}}</option>

    @endforeach
</select>


         
    
   </div>
    <!--<div class="form-group">
            <br>
        <br>
        {!! Form::text('precio', $servicio->precio, array('class' => 'form-control', 'placeholder' => '', 'hidden' => '')) !!}
        
</div>  -->
    <div class="form-group">
      <label for="exampleFormControlSelect1">Precio</label>
 
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

    
      
   

 
        
      
</div>
    


    
@endsection