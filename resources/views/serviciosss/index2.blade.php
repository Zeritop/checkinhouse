





@extends('layout.principal')


@section('content')
<div class="cajaOscura">



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
   <div class="col-md-12">
         <div class="form-group">
   <label> Nombre:</label><br> <input type="text" class="form-control" name="nombre" placeholder="Nombre Completo" required></div>
   
    <div class="form-group">
    <label>Teléfono:</label><br> <input type="text" class="form-control" name="telefono" placeholder="912345678" required></div>
    
    <div class="form-group">
    <label>Correo Electrónico:</label><br> <input type="email" class="form-control" name="email"  placeholder="ejemplo@algo.com" required></div>
    <br><br><br>
   <!-- <div class="form-group">
   <label> RUT:</label><br> <input type="text" class="form-control" placeholder="123456789" name="rut"></div>
   
    <div class="form-group">
   <label> Dirección:</label> <br><input type="text" class="form-control" name="direccion" placeholder="calle hola 123" required></div>
   
    <div class="form-group">
    <label>Comuna:</label> <br><input type="text" class="form-control" name="comuna" placeholder="Talcahuano" required></div>-->
    </div>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="col-md-12">
        <div class="form-group">
        <label>Patente:</label> <br><input type="text" class="form-control" name="patente" placeholder="AAXZ98" required></div>
            <div class="form-group">
    <label for="exampleFormControlSelect1">Marca:</label>
    <select class="form-control" id="exampleFormControlSelect1" name="marca">
      <option>Audi</option>
      <option>Bentley</option>
      <option>BMW</option>
      <option>Chevrolet</option>
      <option>Citroen</option>
      <option>Dodge</option>
      <option>Fiat</option>
      <option>Ford</option>
      <option>Honda</option>
      <option>Hyundai</option>
      <option>Izusu</option>
      <option>Iveco</option>
      <option>Jaguar</option>
      <option>Jeep</option>
      <option>Kia Motors</option>
      <option>Lexus</option>
      <option>Mahindra</option>
      <option>Mazda</option>
      <option>Mercedes-Benz</option>
      <option>Mitsubishi</option>
      <option>Nissan</option>
      <option>Opel</option>
      <option>Peugeot</option>
      <option>Renault</option>
      <option>Saab</option>
      <option>Seat</option>
      <option>Skoda</option>
      <option>SsangYong</option>
      <option>Subaru</option>
      <option>Suzuki</option>
      <option>Tata</option>
      <option>Toyota</option>
      <option>Volkswagen</option>
      <option>Volvo</option>
    </select>
  </div>
        
      <div class="form-group">
        <label>Modelo:</label> <br><input type="text" class="form-control" name="modelo" placeholder="Modelo del auto" required></div>
      <div class="form-group">
    <label for="exampleFormControlSelect1">Año:</label>
    <select class="form-control" id="exampleFormControlSelect1" name="ano">
      <option>1980</option>
      <option>1981</option>
      <option>1982</option>
      <option>1983</option>
      <option>1984</option>
      <option>1985</option>
      <option>1986</option>
      <option>1987</option>
      <option>1988</option>
      <option>1989</option>
      <option>1990</option>
      <option>1991</option>
      <option>1992</option>
      <option>1993</option>
      <option>1994</option>
      <option>1995</option>
      <option>1996</option>
      <option>1997</option>
      <option>1998</option>
      <option>1999</option>
      <option>2000</option>
      <option>2001</option>
      <option>2002</option>
      <option>2003</option>
      <option>2004</option>
      <option>2005</option>
      <option>2006</option>
      <option>2007</option>
      <option>2008</option>
      <option>2009</option>
      <option>2010</option>
      <option>2011</option>
      <option>2012</option>
      <option>2013</option>
      <option>2014</option>
      <option>2015</option>
      <option>2016</option>
      <option>2017</option>
      <option>2018</option>
      <option>2019</option>
    </select>
  </div>   

       <div class="form-group">
    <label for="exampleFormControlSelect1">Servicios</label>
     <br>
<select name="servicio" class="form-control" id="exampleFormControlSelect1">
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
   <div class="form-group">
    <label for="exampleFormControlSelect1">Hora</label>
    <select class="form-control" id="exampleFormControlSelect1" name="hora">
      <option>8:30</option>
      <option>9:00</option>
      <option>9:30</option>
      <option>10:00</option>
      <option>10:30</option>
      <option>11:00</option>
      <option>11:30</option>
      <option>12:00</option>
      <option>12:30</option>
      <option>13:00</option>
      <option>13:30</option>
      <option>14:30</option>
      <option>15:00</option>
      <option>15:30</option>
      <option>16:00</option>
      <option>16:30</option>
      <option>17:00</option>
      <option>17:30</option>
    </select>
  </div>
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