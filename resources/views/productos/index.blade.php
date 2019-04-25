<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <div class="row mt-5 my-5 offset-md-1">
            @foreach($fotos as $foto)
            <div style="margin: 15px;" class="alert alert-info">
            <div class="card" style="width: 11rem;">
                <img height="150px;" src="/storage/{{$foto->nombre}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$foto->descripcion}}</h5>
                        <p class="card-text">Precio: {{$foto->precio}}</p>
                        <p class="card-text">Cantidad: {{$foto->cantidad}}</p>
                        <!--<a href="#" class="btn btn-primary">Comprar</a>-->
                    </div>
            </div>
        </div>

            @endforeach
    </div>
</div>


</div>


@stop


</body>
</html>


