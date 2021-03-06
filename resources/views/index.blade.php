<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title>Check In House</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/imagenHome.css') }}">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css-bootstrap/bootstrap.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Nova+Flat" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/redesSociales.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="Imagenes/definitivo.ico">
<link rel="stylesheet" href="{{ asset('owlcarousel/dist/assets/owl.carousel.min.css') }}">
    



</head>

<body>
  <header class="header">
    <!--Nav bar -->
<nav class="navbar navbar-expand-lg">
    <div style="background-color: transparent" id="caja-imagen">
        <a class="navbar-brand" href="{{url('/')}}" style="margin-left: 20px">
        <img src="Imagenes/cih.svg" width="200" height="67" class="d-inline-block align-top"- alt="">
    </a>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span>LINKS</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText" style="background-color: transparent; z-index: 1;">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" id="textNavbar" href="{{url('/')}}">INICIO <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="textNavbar" href="{{url('nosotros')}}">NOSOTROS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="textNavbar" href="{{url('categorias')}}">SERVICIOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="textNavbar" href="{{url('serviciosss')}}">PROGRAMAR SERVICIOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="textNavbar"  href="{{url('productos')}}">PRODUCTOS</a>
            </li>
        </ul>

        <ul class="nav navbar-nav ml-auto">
    @guest
            <li class="nav-item">
        <a class="nav-link" id="textNavbar"  href="{{url('ingresar')}}" style="color: blue;" ><i class="fa fa-cog"></i>Ingresar</a>
      </li>
      @else
                <li class="nav-item dropleft">
                    <a href="#" class="nav-link dropdown-toggle" id="dropDrop" data-toggle="dropdown" role="button"
                    aria-expanded="false" aria-haspopup="true" v-pre>
                            {{ Auth::user()->name }} <!-- <span class="caret"></span> -->
                </a>
                            <div class="dropdown-menu" aria-labelledby="dropDrop">
                                <!-- link para el calendario -->
                                <a class="dropdown-item" href="{{ url('calendarioEventos') }}">Calendario</a> 


                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                        {{ __('Cerrar Sesi??n') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                </form>
                                </div>

                    <!--		<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropDrop">
                  <form method="POST" action="{{ route('logOut')}}">
                    {{ csrf_field() }}
                  <div style="margin-left: 5px;">
                    <button class="btn btn-danger">Cerrar Sesion</button>
                  </div>
                  </form>
               </div> -->

                        </li>
      @endguest
        </ul>
    </div>
</nav>
<div id="cajaTextoHome">
  <h1 id="textoHome" style="font-size:3vw"> LA MEJOR ATENCION PARA SU VEHICULO Y A LA PUERTA DE SU CASA.</h1>
  </div>
  <div id="botonHome">
    <span><a href="{{url('serviciosss')}}" id="aBtnHome">Agenda aqu??</a></span>
  </div>
 <!-- <div class="leftupperdiv"></div>
  <div class="rightupperdiv"></div> -->
</header>
<br>
  <br>

<div class="social">
  <ul>
      <li><a href="https://www.facebook.com/CheckInHouseSPA" class="facebook" target="none"><i class="fa fa-facebook"></i></a></li>
      <li><a href="https://www.instagram.com/contacto.checkinhouse/" class="instagram" target="none"><i class="fa fa-instagram"></i></a></li>
      <li><a href="https://api.whatsapp.com/send?phone=+56963543261&text=Contactate%20con%20nosotros." class="whatsapp" target="none"><i class="fa fa-whatsapp"></i></a></li>
     <!-- <li><a href="" class="mail" target="none"><i class="fa fa-envelope"></i></a></li> -->
  </ul>
    <!-- <div id="facebook"><a href="https://www.facebook.com/CheckInHouseSPA" target="none"><i class="fa fa-facebook"></i></a></div>
     <div id="instagram"><a href="https://www.instagram.com/contacto.checkinhouse/" target="none"><i class="fa fa-instagram"></i></a></div> -->
</div>

	

        <h3 style="text-align: center; color: #04B45F; "><strong>??POR QUE CONFIAR EN NOSOTROS?</h3></strong>

         <br>
  <br>
  <br>
  <br>


    <div class="container text-center">


        <div class="row mt-3">
          <!--Primera columna Ventajas-->
          <div class="col-md-4">
            <div class="card card-profile border-success" style="border: solid 3px;">
              <div class="card-avatar">
                <a >
                  <img src="Imagenes/reloj.png" class="mx-auto d-block">
                </a>
              </div>
              <div class="card-body ">

                    <h4 class="card-title">Eliminamos "Tiempos muertos"</h4>

                    <p class="card-description">
                      Trabajamos en los horarios que a usted m??s le acomoden, para no parar su veh??culo en ning??n momento.
                    </p>
                    
                </div>
             </div>
        </div>
          
         <!-- <div class="row col-md-3 offset-md-1" style="border: 2px solid #000;">
            <img src="Imagenes/reloj.png" class="mx-auto d-block" style="width: 110px; height: 110px; border: 3px solid #000; border-radius: 50%; z-index:200;">
            <h3>Eliminamos "Tiempos muertos"</h3>
            <p>Trabajamos en los horarios que a usted m??s le acomoden, para no parar su veh??culo en ning??n momento.</p>
          </div> -->
          <!--Segunda columna Ventajas-->
          <div class="col-md-4">
            <div class="card card-profile border-info" style="border: solid 3px;">
              <div class="card-avatar">
                <a >
                  <img src="Imagenes/comprobado.png" class="mx-auto d-block" >
                </a>
              </div>
              <div class="card-body ">

                    <h4 class="card-title">Generamos Informes Completos</h4>

                    <p class="card-description">
                      Trabajamos en los horarios que a usted m??s le acomoden, para no parar su veh??culo en ning??n momento.
                    </p>
                    
                </div>
             </div>
        </div>
         <!-- <div class="row col-md-3 offset-md-1">
            <img src="Imagenes/comprobado.png" class="mx-auto d-block" style="width: 100px; height: 100px;">
            <h3>Generamos Informes Completos</h3>
            <p>Usted conocer?? el detalle de las intervenciones en su veh??culo, as?? como de los diagn??sticos y recomendaciones que tenemos para usted.</p>
          </div> -->
          <!--Tercera columna Ventajas-->
          <div class="col-md-4">
            <div class="card card-profile border-warning" style="border: solid 3px;">
              <div class="card-avatar">
                <a >
                  <img src="Imagenes/guardar.png" class="mx-auto d-block" >
                </a>
              </div>
              <div class="card-body ">

                    <h4 class="card-title">Ahorre tiempo y extienda la vida ??til de sus equipos</h4>

                    <p class="card-description">
                      Nuestra principal preocupaci??n es generar la menor p??rdida de tiempo y la mayor durabilidad de su veh??culo.
                    </p>
                    
                </div>
             </div>
        </div>
         <!-- <div class="row col-md-3 offset-md-1">
            <img src="Imagenes/guardar.png" class="mx-auto d-block" style="width: 100px; height: 100px;">
            <h3>Ahorre tiempo y extienda la vida ??til de sus equipos</h3>
            <p>Nuestra principal preocupaci??n es generar la menor p??rdida de tiempo y la mayor durabilidad de su veh??culo. Todo esto en un precio razonable y competitivo.</p>
          </div> -->

        </div>

    </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

<div style="background-color: #ffffff;">
  <div class="container mt-5 mb-5">
    <div class="owl-carousel" style="padding: 10px;">
      <div> <img src="Imagenes/auto-rojo.jpg" alt=""> </div>
      <div> <img src="Imagenes/auto-amarillo.jpeg" alt=""> </div>
      <div> <img src="Imagenes/Auto-del-futuro.png" alt=""> </div>
      <div> <img src="Imagenes/degradado.jpg" alt=""> </div>
      <div> <img src="Imagenes/noFoto.png" alt=""> </div>
      <div> <img src="Imagenes/noFoto.png" alt=""> </div>
      <div> <img src="Imagenes/noFoto.png" alt=""> </div>
    </div>
  </div>
</div>

<!--Footer-->
<footer class="footer">


  <!--Footer Links-->
  <div class="container mt-2 mb-4 text-center text-md-left">
      <div class="row mt-3">

          <!--Primera columna-->
          <div class="col-md-3 col-lg-3 col-xl-3 mb-4">
            
              <img src="Imagenes/cih.svg" alt="" style="width: 80%;">
            
              <br>
              <br>
              <p>Check In House. SPA</p>
          </div>

          <!--Segunda columna-->
         <div class="col-md-2 col-lg-2 col-xl-2 " id="columna-footer">
              <h6 class="text-uppercase font-weight-bold">
                  <strong>Navega</strong>
              </h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #151515;">

              <p>
                <a href="{{url('nosotros')}}" id="linkFooter">Nosotros</a> 
           
              </p>
            <p><a href="{{ url('categorias') }}" id="linkFooter">Servicios</a></p>
            <p><a href="{{ url('productos') }}" id="linkFooter">Productos</a></p>
              <p>
                <a href="{{ url('serviciosss') }}" id="linkFooter">Agenda aqu??</a>
              </p>

          </div> 



          <!-- tercera columna-->
          <div class="col-md-4 col-lg-2 col-xl-4">
              <h6 class="text-uppercase font-weight-bold">
                  <strong>Contacto</strong>
              </h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #151515;">
              <p>
                  <i class="fa fa-home mr-3"></i> Talcahuano, VIII Region del Biobio Chile</p>
              <p>
                  <i class="fa fa-phone mr-3"></i> + 569 63543261</p>
              <p>
                  <i class="fa fa-envelope mr-3"></i> contacto@checkinhouse.cl</p>

          </div>
           <!--Cuarta columna-->
           <div class="col-md-4 col-lg-3 col-xl-2">
            <h6 class="text-uppercase font-weight-bold">
                <strong>Redes Sociales</strong>
            </h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 75%; background-color: #151515;">
            <p>
              <a href="https://www.instagram.com/contacto.checkinhouse/"><img src="Imagenes/instagram.png" alt="" style="width: 20%"></a>
              <a href="https://www.facebook.com/CheckInHouseSPA"><img src="Imagenes/facebook.png" alt="" style="width: 20%"></a>   </p>
            <p>
               </p>
                
        </div>
      </div>
  </div>

  <!-- Copyright-->
  <div class="footer-copyright py-3 text-center" style="background-color: #0a0a0a;">
      Check In House ?? {{ date('Y') }}
  </div>
</footer>



<script src="{{ asset('js-bootstrap/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js-bootstrap/bootstrap.min.js') }} "></script>

<script src="owlcarousel/dist/owl.carousel.min.js"></script>
<script >
  $(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true
  });
});
</script>
</body>
</html>

