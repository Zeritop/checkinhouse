<?php 
use Illuminate\Support\Facades\DB;


?>
<!DOCTYPE html>
<html>
<head>
	<title>Cotizacion</title>
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
				<h5>Cotización de servicios</h5>
			</div>
			<div id="parrafoCont">
				<p ><strong>Antofagasta #255, Las Higueras, Talcahuano<br>
				www.checkinhouse.cl<br>
				Fono +56 963 543 261<br>
			contacto@checkinhouse.cl</strong></p>	
			</div>
			<div>
				
			</div>
			
			<div id="tablaDatCli">
				<table >
				<tr>
					<th colspan="2" style="background-color: #74DF00; color: white; text-align: center;">DATOS CLIENTE</th>
				</tr>
				<tr>
					<td style="width: 300px;">&nbsp;[Nombre Contacto]</td>
					<td style="width: 1000px;">{!! Form::text('nombre', null, array('placeholder' => '','class' => 'form-control', 'required','disabled')) !!}</td>
				</tr>
				<tr>
					<td style="width: 300px;">&nbsp;[Nombre de la Empresa]</td>
					<td style="width: 1000px;">{!! Form::text('empresa', null, array('placeholder' => '','class' => 'form-control', 'required','disabled')) !!}</td>
				</tr>
				<tr>
					<td style="width: 300px;">&nbsp;[Dirección]</td>
					<td style="width: 1000px;">{!! Form::text('dir', null, array('placeholder' => '','class' => 'form-control', 'required','disabled')) !!}</td>
				</tr>
				<tr>
					<td style="width: 300px;">&nbsp;[Teléfono]</td>
					<td style="width: 1000px;">{!! Form::text('telefono', null, array('placeholder' => '','class' => 'form-control', 'required','disabled')) !!}</td>
				</tr>

				<tr>
					<td style="width: 300px;">&nbsp;[Día]</td>
					<td style="width: 1000px;">{!! Form::text('dia', null, array('placeholder' => '','class' => 'form-control', 'required','disabled')) !!}</td>
				</tr>
				<tr>
					<td style="width: 300px;">&nbsp;[Hora]</td>
					<td style="width: 1000px;">{!! Form::text('hora', null, array('placeholder' => '','class' => 'form-control', 'required','disabled')) !!}</td>
				</tr>
			</table>
			</div>
			<br>
			

			<div id="tablaDatCli">
				<table>
					<tr>
						<th style="background-color: #74DF00; color: white; text-align: center; width: 550px">DESCRIPCION</th>
						<th style="background-color: #74DF00; color: white; text-align: center; width: 150px;">PRECIO UNIT.</th>
						<th style="background-color: #74DF00; color: white; text-align: center; width: 150px;">CANTIDAD</th>
						<th style="background-color: #74DF00; color: white; text-align: center; width: 150px;">DESCUENTO</th>
						<Th style="background-color: #74DF00; color: white; text-align: center; width: 150px;">TOTAL</Th>
					</tr>

					<tr>
						<td>{!! Form::text('servicio', null, array('placeholder' => '','class' => 'form-control', 'required','id'=>'cosa','disabled')) !!}</td>
						<?php 
						$nombre = $_GET['servicio'];
						
						
$servicios = DB::table('servicios')->select('precio')->where('nombre', $nombre)->orderBy('created_at', 'ASC')->get();
        				

 
$resultado = intval(preg_replace('/[^0-9]+/', '', $servicios), 10); 

$neto=round($resultado/1.19);
$iva=round($neto*0.19);	
$total=$resultado;

						?>
						<td style="text-align: center;">{!! Form::text('precio', $resultado, array('placeholder' => '','class' => 'form-control', 'required','disabled')) !!}</td>
						<td style="text-align: center;">1</td>
						<td style="text-align: center;">0%</td>
						<td style="text-align: center;">{!! Form::text('precio', $total, array('placeholder' => '','class' => 'form-control', 'required','disabled')) !!}</td>
					</tr>
					<tr>
						<td >&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
						<td style="text-align: center;">&nbsp;</td>
					</tr>
				</table>
			</div>
			<div id="tablaDatCli2">
				<table>
					<tr>
						<td style="width: 144px;"><strong>&nbsp;NETO</strong></td>
						<td style="width: 141px; text-align: right;">{!! Form::text('precio', $neto, array('placeholder' => '','class' => 'form-control', 'required','disabled')) !!}</td>
					</tr>
					<tr>
				<td style="width: 144px;"><strong>&nbsp;IVA 19%</strong></td>
						<td style="width: 141px; text-align: right;">{!! Form::text('precio', $iva, array('placeholder' => '','class' => 'form-control', 'required','disabled')) !!}</td>
					</tr>
					<tr>
						<td style="width: 144px; "><strong>&nbsp;TOTAL</strong></td>
						<td style="width: 141px; text-align: right;">{!! Form::text('precio', $resultado, array('placeholder' => '','class' => 'form-control', 'required','disabled')) !!}</td>
					</tr>
				</table>
			</div>
			<br><br><br><br><br><br>
			<div id="tablaDatCli">
				<table style="text-align: center;">
					<tr >
						<th style="background-color: #74DF00; width: 1200px; color: white;">TERMINOS Y CONDICIONES</th>
					</tr>
					<tr>
						<td>1.El servicio deberá ser confirmado con al menos 24 horas de anticipación</td>
					</tr>
					<tr>
						<td>2. En caso de aceptar la cotización favor responder al correo electrónico</td>
					</tr>
				</table>
			</div>
			<br><br>
			<div style="text-align: center;">
				<p>Si usted tiene alguna pregunta sobre esta cotización, por favor, póngase en contacto con nosotros</p>
				<p><strong>¡Gracias por preferirnos!</strong></p>
			</div>
			
			
		</div>	
	</div>
		
</div>
<br>
<div style="text-align:center;">La cotización automática se encuentra en desarrollo, más adelante tendra más opciones además de su entrega en formato.pdf para mayor comodidad.</div>

@stop
</body>
</html>


