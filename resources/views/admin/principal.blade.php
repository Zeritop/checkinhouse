<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    {!!Html::style('css-bootstrap/bootstrap.min.css')!!}
    {!!Html::style('css/fonts.css')!!}
	<title>Administración</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="admin" style="margin-left: 20px">Check In House</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        	<span class="navbar-toggler-icon"></span>
        </button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Herramienta</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Personal</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Boleta</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Transporte</a>
				</li>
				<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones</a>
       			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
         		 	<a class="dropdown-item" href="#">Acción</a>
          		 	<a class="dropdown-item" href="#">Otra acción</a>
          		<div class="dropdown-divider"></div>
          			<a class="dropdown-item" href="#">Más opciones...</a>
        		</div>
      			</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
      			<input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    		</form>
    		<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">Salir</a>
				</li>
			</ul>
		</div>			
	</nav>

	<br>


	<!-- <div class="row">
		<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" class="col-md-6">
  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Herramienta</a>
  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Personal</a>
  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Boleta</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Transporte</a>
</div>
<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">Hola</div>
  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Wena</div>
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Cabroh</div>
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Chao</div>
</div>	
	</div> -->
	
	@yield('content')
	<script src="js-bootstrap/jquery-3.2.1.min.js"></script>
	<script src="js-bootstrap/bootstrap.min.js"></script>
</body>
</html>