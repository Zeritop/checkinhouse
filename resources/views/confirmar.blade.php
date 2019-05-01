
<?php 
use Illuminate\Support\Facades\DB;





?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title>Check In House</title>
	<link rel="stylesheet" type="text/css" href="css/imagenHome.css">




</head>
@extends('layout.principal')

@section('content')
<body>
  <br><br>
  <h1 style="text-align: center">Su hora de atención ha sido confirmada</h1>
	<?php 
$hora = $_GET['hora'];
$servicio = $_GET['servicio'];
$dia = $_GET['dia'];
 DB::table('horarios')
            ->where('horai', $hora)
            ->update(['ocupado' => 1]);
             DB::table('horarios')
            ->where('horai', $hora)
            ->update(['servicio' => $servicio]);
            DB::table('horarios')
            ->where('horai', $hora)
            ->update(['dia' => $dia]);
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
@stop