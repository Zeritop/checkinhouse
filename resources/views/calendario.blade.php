<?php 
use Illuminate\Support\Facades\DB;





?>
<!DOCTYPE html>
<html>
<head>
	<title>Calendario</title>
	<link rel="stylesheet" type="text/css" href="css/pdf.css">
	<link rel="shortcut icon" type="image/x-icon" href="Imagenes/checkin2.ico">
</head>
<body>
@extends('layout.principal')

@section('content')

<br>
<div class="container">
	<div class="row">
		<div style="border: 2px solid black">
			<img id="logoCot" src="Imagenes/cih.jpg" style="width: 30%;">
			<div style="border: 2px solid black" id="cajaNombre">
				<h5>Calendario Taller</h5>
			</div>
			
			<div>
				
			</div>
			
			<div id="tablaDatCli">
				
			</div>
			<br>
			

			<div id="tablaDatCli">
				<table>
					<tr>
						<th style="background-color: red; color: white; text-align: center; width: 150px;">Lunes</th>
						<th style="background-color: blue; color: white; text-align: center; width: 150px;">Martes</th>
						<th style="background-color: yellow; color: white; text-align: center; width: 150px;">Miecoles</th>
						<th style="background-color: #74DF00; color: white; text-align: center; width: 150px;">Jueves</th>
						<Th style="background-color: orange; color: white; text-align: center; width: 150px;">Viernes</Th>
						<Th style="background-color: gray; color: white; text-align: center; width: 150px;">Sabado</Th>
						<Th style="background-color: lightgray; color: white; text-align: center; width: 150px;">Domingo</Th>
					</tr>

					<tr>
						<td style="font-size: 14px; background-color: lightblue; height: 150px;" > 
							<?php $horarios = DB::table('horarios')->where('ocupado',1)->where('lugar','taller')->where('dia','Lunes')->orderBy('id', 'ASC')->get(); ?>
						
						@foreach($horarios as $horario)
						{{$horario->horai}} {{$horario->servicio}}<br>
						@endforeach 

						</td>
						
						<td style="font-size: 14px; background-color: lightblue; height: 150px;" ><?php $horarios = DB::table('horarios')->where('ocupado',1)->where('lugar','taller')->where('dia','Martes')->orderBy('id', 'ASC')->get(); ?>
						
						@foreach($horarios as $horario)
						{{$horario->horai}} {{$horario->servicio}}<br>
						@endforeach </td>
						<td style="font-size: 14px; background-color: lightblue; height: 150px;" ><?php $horarios = DB::table('horarios')->where('ocupado',1)->where('lugar','taller')->where('dia','Miercoles')->orderBy('id', 'ASC')->get(); ?>
						
						@foreach($horarios as $horario)
						{{$horario->horai}} {{$horario->servicio}}<br>
						@endforeach </td>
						<td style="font-size: 14px; background-color: lightblue; height: 150px;" ><?php $horarios = DB::table('horarios')->where('ocupado',1)->where('lugar','taller')->where('dia','Jueves')->orderBy('id', 'ASC')->get(); ?>
						
						@foreach($horarios as $horario)
						{{$horario->horai}} {{$horario->servicio}}<br>
						@endforeach </td>
						<td style="font-size: 14px; background-color: lightblue; height: 150px;" ><?php $horarios = DB::table('horarios')->where('ocupado',1)->where('lugar','taller')->where('dia','Viernes')->orderBy('id', 'ASC')->get(); ?>
						
						@foreach($horarios as $horario)
						{{$horario->horai}} {{$horario->servicio}}<br>
						@endforeach </td>
						<td style="font-size: 14px; background-color: lightblue; height: 150px;" ><?php $horarios = DB::table('horarios')->where('ocupado',1)->where('lugar','taller')->where('dia','Sabado')->orderBy('id', 'ASC')->get(); ?>
						
						@foreach($horarios as $horario)
						{{$horario->horai}} {{$horario->servicio}}<br>
						@endforeach </td>
						<td style="font-size: 14px; background-color: lightblue; height: 150px;" ><?php $horarios = DB::table('horarios')->where('ocupado',1)->where('lugar','taller')->where('dia','Domingo')->orderBy('id', 'ASC')->get(); ?>
						
						@foreach($horarios as $horario)
						{{$horario->horai}} {{$horario->servicio}}<br>
						@endforeach </td>
					</tr>
				
				</table>
			</div>
			<div id="tablaDatCli2">
				
			</div>
			
			<div id="tablaDatCli">
					
			</div>
			<br><br>
			
			
			
		</div>	
	</div>
		
</div>
<br>

@stop
</body>
</html>


