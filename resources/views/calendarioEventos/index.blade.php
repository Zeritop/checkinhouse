<!DOCTYPE html>
<html>
<head>
	<title>Calendario</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="Imagenes/definitivo.ico">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
    body{
    /*  background-image: url("Imagenes/fondocale.jpg");
       background-size: cover; */
			 background: #6441A5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2a0845, #6441A5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2a0845, #6441A5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    </style>

	</head>
<body>
@extends('layout.principal')

@section('content')
<div class="container">
<div class="row">

	<h1 style="color: white;">Calendario</h1>

</div>

  <div id="app">
    <calendario></calendario>
  </div>
</div>



</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
@endsection
