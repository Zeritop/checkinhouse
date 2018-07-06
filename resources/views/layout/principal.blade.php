<!DOCTYPE html>
<html>
<head>
	<title>Check In House</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css-bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/carousel.css">
    <link rel="shortcut icon" type="image/x-icon" href="Imagenes/checkin2.ico">
</head>
<body>

	<!--Nav bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index" style="margin-left: 20px">
            <img src="Imagenes/checkin2.png" width="180" height="70" class="d-inline-block align-top"- alt="">    
        </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        	<span class="navbar-toggler-icon"></span>
        </button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index">Inicio <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="servicios">Servicios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="nosotros">Nosotros</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Boleta</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Transporte</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
      			<input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    		</form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="admin">Ingresar</a>
                </li>
            </ul>
		</div>			
	</nav>
	@yield('content')


<!--Footer-->
<footer class="footer bg-dark text-white">

    <div style="background-color: #5FB404;">
        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 text-white">Contactanos en nuestras redes sociales!</h6>
                </div>

                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!--Facebook-->
                   <a class="btn-floating btn-sm btn-fb">
                        <i class="fa fa-facebook"></i>
                   </a>
                    <!--Twitter-->
                    <a class="tw-ic">
                        <span class="fa fa-twitter"> </span>
                    </a>
                    <!--Google +-->
                    <a class="gplus-ic">
                        <i class="fa fa-google-plus white-text mr-lg-4"> </i>
                    </a>
                    <!--Linkedin-->
                    <a class="li-ic">
                        <i class="fa fa-linkedin white-text mr-lg-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fa fa-instagram white-text mr-lg-4"> </i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--Primera columna-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Nombre empresa</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #151515;">
                <p>Check In House y algo mas ponemos.</p>
            </div>

            <!--Segunda columna-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Servicios</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #151515;">
                <p>
                    <a href="#!">Limpieza</a>
                </p>
                <p>
                    <a href="#!">Lubricación</a>
                </p>
                <p>
                    <a href="#!">Electricidad</a>
                </p>
                <p> 
                    <a href="#!">Otros</a>
                </p>
            </div>

            <!--Tercera columna-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Enlaces Utiles</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #151515;">
                <p>
                    <a href="#!">Su cuenta</a>
                </p>
                <p>
                    <a href="#!">Conviertase en un afiliado</a>
                </p>
                <p>
                    <a href="#!">Tarifas de envío</a>
                </p>
                <p>
                    <a href="#!">Ayuda</a>
                </p>
            </div>

            <!--Cuarta columna-->
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Contacto</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #151515;">
                <p>
                    <i class="fa fa-home mr-3"></i> Talcahuano, Concepción Chile</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> checkinhouse@gmail.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> + 569 1223345</p>
                <p>
                    <i class="fa fa-print mr-3"></i> + 569 23456567</p>
            </div>
        </div>
    </div>

    <!-- Copyright-->
    <div class="footer-copyright py-3 text-center" style="background-color: #151515;">
        © 2018
    </div>
</footer>

                      

<script src="js-bootstrap/jquery-3.2.1.min.js"></script>
<script src="js-bootstrap/bootstrap.min.js"></script>
</body>
</html>