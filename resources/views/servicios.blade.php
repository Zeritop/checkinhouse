<!DOCTYPE html>
<html>
<head>
	<title>Servicios</title>
</head>
@extends('layout.principal')

@section('content')
<body>
<br>
<div class="container text-center">
	<h2>SERVICIOS</h2>
	<hr style="background-color: #E8F312; height: 1px;">
</div>

<div class="container text-center">
	<h5>Contamos con diversos servicios para ofrecer, en los que destacan Limpieza, Lubricación y Electricidad.<br>
		Estos servicios serán satisfechos por nosotros en el lugar que prefieras:</h5>
</div>
	
<div class="container">
	<div class="row">
		<div class="col-md-6 table-responsive">
			<table class="table table-hover table-striped">
				<thead>
					<tr bgcolor="#5FB404">
						<th>Limpieza</th>
						<th>Precio Final</th>
						<th>En Taller</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Limpieza Motor</td>
						<td>$ 30.000 </td>
						<td>$25.000</td>
					</tr>
					<tr class="table-success">
						<td>Limpieza Exterior</td>
						<td>$ 30.000 </td>
						<td>$25.000</td>
					</tr>
					<tr>
						<td>Limpieza Tap. y Alfombra</td>
						<td>$ 45.000 </td>
						<td>$40.000</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="col-md-6 table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr bgcolor="#E8F312">
						<th>Lubricación</th>
						<th>Precio Final</th>
						<th>En Taller</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Cambio Aceite</td>
						<td>$ 25.000 </td>
						<td>$20.000</td>
					</tr>
					<tr class="table-warning">
						<td>Cambio Aceite Caja+Dif</td>
						<td>$ 25.000 </td>
						<td>$20.000</td>
					</tr>
					<tr>
						<td>Engrase juntas, Rod, otros</td>
						<td>$ 30.000 </td>
						<td>$25.000</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<br>

<div class="container">
	<div class="row">
		<div class="col-md-6 table-responsive">
			<table class="table table-hover table-striped">
				<thead>
					<tr bgcolor="#E47011">
						<th>Electricidad</th>
						<th>Precio Final</th>
						<th>En Taller</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Instalación Accesorios</td>
						<td>$ 25.000 </td>
						<td>$20.000</td>
					</tr>
					<tr class="table-danger">
						<td>Mantención Accesorios</td>
						<td>$ 22.000 </td>
						<td>$17.000</td>
					</tr>
					<tr>
						<td>Diagnostico Electrico</td>
						<td>$ 25.000 </td>
						<td>$20.000</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="col-md-6 table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr bgcolor="#249BDB">
						<th>Otros Servicios</th>
						<th>Precio Final</th>
						<th>En Taller</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Cambio Pastillas (x4)</td>
						<td>$ 25.000 </td>
						<td>$20.000</td>
					</tr>
					<tr class="table-info">
						<td>Mantenciones Mecanicas (B)</td>
						<td>$ 25.000 </td>
						<td>$20.000</td>
					</tr>
					<tr>
						<td>Diagnostico Mecanico</td>
						<td>$ 25.000 </td>
						<td>$20.000</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>		
</div>
		

</body>
</html>
@stop