<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">   
    <link rel="shortcut icon" type="image/x-icon" href="Imagenes/definitivo.ico">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Productos</title>  
</head>
<body>
@extends('layout.principal')


@section('content')
<br>
<div class="container text-center">
    <h2 style="color: #04B45F;">Productos</h2>
</div>
<div class="container">
    <div id="app">
         <productos></productos>   
    </div> 
</div>


</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
@stop


