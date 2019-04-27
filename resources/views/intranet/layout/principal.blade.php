<!DOCTYPE html>
<html>
<head>
	<title>Intranet</title>

	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">-->
       <link rel="shortcut icon" type="image/x-icon" href="Imagenes/definitivo.ico">
       <link href="https://fonts.googleapis.com/css?family=Nova+Flat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/../css/sidebar.css">  
    <script src="{{ asset('../js/sidebar.js') }}" defer></script>
    
    <style>
        body{
            background-color: #32325d;
            font-family: 'Nova Flat', cursive;
            color: lightgreen;
        }
    </style>

</head>
<body>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                  <br>
                  @yield('content')
                </div>
              </div>
            </div>
        <div id="wrapper">
  <div class=""></div>
  <!-- Sidebar -->
  <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
    <ul class="nav sidebar-nav">
      <li class="sidebar-brand"> <a href="{{url('intranet')}}" style="background-color: #3ADF00; color: #fff;">
                       Intranet CIH
                    </a>

      </li>
      <li> 
        <a href="{{url('intranet')}}">Home</a>
      </li>
      <li> 
        <a href="{{url('calendario/Web/my-calendar.php')}}">Calendario</a>
      </li>
      

      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar <span class="caret"></span></a>

        <ul class="dropdown-menu" role="menu">
          <li class="dropdown-header">Listado para administrar</li>
          <li> 
            <a href="{{url('clientes')}}">Clientes</a>
          </li> 
          <li> 
        <a href="{{url('uusers')}}">Usuarios</a>
      </li>
          <li>
            <a href="{{url('domicilios')}}">Domicilio</a>
          </li>
          <li>
            <a href="{{url('personales')}}">Personal</a>
          </li>
          <li>
            <a href="{{url('herramientas')}}">Herramientas</a>
          </li>
          <li>
            <a href="{{url('repuestos')}}">Repuestos</a>
          </li>
          <!--<li>
            <a href="#">Separated link</a>
          </li>
          <li>
            <a href="#">One more separated link</a>
          </li>-->
        </ul>
      </li>
      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <span class="caret"></span></a>

        <ul class="dropdown-menu" role="menu">
          <li class="dropdown-header">Administrar Servicios</li>
          <li><a href="{{url('servicioss')}}">Cambio de Aceite</a>

          </li>
          <li><a href="{{url('diagnosticogeneral')}}">Diagnostico General</a>

          </li>
          <li><a href="{{url('mantenimientofrenos')}}">Mantenimiento Frenos</a>

          </li>
          
        </ul>
      </li>
      <li>
          <a href="{{url('catServs')}}">Categoria Servicios</a>
     </li>
     <li>
<<<<<<< HEAD
        <a href="{{url('fotos')}}">Fotos</a>
=======
        <a href="{{url('fotos')}}">Productos</a>
>>>>>>> seba
     </li>
      <li><br>
          <form method="POST" action="{{ route('logOut')}}">
              {{ csrf_field() }}
              <div style="margin-left: 5px;">
                <button class="btn btn-danger">Cerrar Sesion</button>    
              </div>
                
          </form>
              
          
      </li>
      <!--<li> <a href="#">Events</a>

      </li>
      <li> <a href="#">Team</a>

      </li>
      
      <li> <a href="#">Services</a>

      </li>
      <li> <a href="#">Contact</a>

      </li>
      <li> <a href="">Follow me</a>

      </li>-->
    </ul>
  </nav>
  <!-- /#sidebar-wrapper -->
  <!-- Page Content -->
  <div id="page-content-wrapper">
    <button type="button" class="hamburger is-closed" data-toggle="offcanvas"> <span class="hamb-top"></span>
      <span class="hamb-middle"></span>
      <span class="hamb-bottom"></span>

    </button>
   
  </div>
  <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->
</body>
</html>