@extends('layout.principal')

@section('content')
<?php
 ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $dia = date("d");
    $mes = date("n");
    $year = date("Y");
    $from = $_GET["email"];
    $to = "cotinhouse@gmail.com";  
    $subject = "Cotizacion " . $dia . "-" . $mes . "-" . $year;
    $message = "Nombre: ". $_GET["nombre"] . "\n" . "Telefono: " . $_GET["telefono"] . "\n" .
     "Email: " . $_GET["email"] . "\n" .
      /*"RUT: " . $_GET["rut"] . "\n" . "Direccion: " . $_GET["direccion"] . 
      "\n" . "Comuna: " . $_GET["comuna"] . "\n" .*/
       "Patente: " . $_GET["patente"] . "\n" .
        "Marca: " . $_GET["marca"] . "\n" . "Modelo: " . $_GET["modelo"] . "\n" . 
        "A�o: " . $_GET["ano"] . "\n" . "Servicios: " . "\n" . $_GET["servicio"] . "\n". 
        "D�a: ". $_GET["dia"]. "\n". "Hora: ". $_GET["hora"]. "\n";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    sleep(3);
    header('location: servicios');
    
?>