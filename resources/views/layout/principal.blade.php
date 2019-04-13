<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    
    
    
	<title>Check In House</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css-bootstrap/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Nova+Flat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/redesSociales.css">
    <link rel="stylesheet" type="text/css" href="css/principal.css">
    <link rel="shortcut icon" type="image/x-icon" href="Imagenes/definitivo.ico">
    
    <style>
    
        .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

          .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        .nav-item > a{
                font-size: 18px;
            }
            
            nav{
                height: 80px;
            }
            
            .navbar{
                background-color: #000;
                
            }
            
            .footer{
                background-color: #000;
                color: #fff;
                padding-top: 20px;
            }
            
            div #columna-footer p a{
                text-decoration: none;
                color: #fff;
            }
            
            #caja-imagen{
                position: relative;
                right: 30px;
                height: 80px;
                padding: 5px;
                

            }
            
            #textNavbar{
                color: #fff;
                font-family: 'Nova Flat', cursive;
            }

            #textNavbar:hover{
                color: #3ADF00;
                text-decoration: underline;
            }
            
            body{
                font-family: 'Nova Flat', cursive;
            }
            
            .navbar-toggler{
                color: #fff;
            }
            
            #linkFooter:hover{
                color: #3ADF00;
                text-decoration: underline;
            }

    </style>
</head>
<body>

	<!--Nav bar -->
<nav class="navbar navbar-expand-lg">
        <div style="background-color: #3ADF00" id="caja-imagen">
            <a class="navbar-brand" href="/" style="margin-left: 20px">
            <img src="Imagenes/cih.svg" width="200" height="67" class="d-inline-block align-top"- alt="">    
        </a>
        </div>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        	<span>LINKS</span>
        </button>
		<div class="collapse navbar-collapse" id="navbarText" style="background-color: #000; z-index: 1;">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" id="textNavbar" href="/">INICIO <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="textNavbar" href="nosotros">NOSOTROS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="textNavbar" href="servicios">SERVICIOS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="textNavbar" href="programarservicios">PROGRAMAR SERVICIOS</a>
				</li> 
                <li class="nav-item">
                    <a class="nav-link" id="textNavbar"  href="crear">COTIZAR</a>
                </li> 
			      
			</ul>
			
			<ul class="navbar-nav ml-auto">
			    <li class="nav-item">
                    <a class="nav-link" id="textNavbar"  href="ingresar" style="color: blue;" >INGRESAR</a>
                </li>    
			</ul>
		</div>			
	</nav>
	@yield('content')
	
	<div class="social">
           <div id="facebook"><a href="https://www.facebook.com/CheckInHouseSPA" target="none"><i class="fa fa-facebook"></i></a></div>
           <div id="instagram"><a href="https://www.instagram.com/checkInHouse_Oficial/" target="none"><i class="fa fa-instagram"></i></a></div>
   </div> 


<!--Footer-->
<footer class="footer">


    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--Primera columna-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Nombre empresa</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #151515;">
                <p>Check In House. SPA</p>
            </div>

            <!--Segunda columna-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" id="columna-footer">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Servicios</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #151515;">
    
                <p>
                    <a href="servicios" id="linkFooter">Lubricación</a>
                </p>
              
            </div>

           

            <!--Cuarta columna-->
            <div class="col-md-4 col-lg-3 col-xl-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Contacto</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #151515;">
                <p>
                    <i class="fa fa-home mr-3"></i> Talcahuano, VIII Region del Biobio Chile</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> contacto@checkinhouse.cl</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> + 569 63543261</p>
               
            </div>
        </div>
    </div>

    <!-- Copyright-->
    <div class="footer-copyright py-3 text-center" style="background-color: #000;">
        Check In House © 2019
    </div>
</footer>

                      

<script src="js-bootstrap/jquery-3.2.1.min.js"></script>
<script src="js-bootstrap/bootstrap.min.js"></script>
</body>
</html>