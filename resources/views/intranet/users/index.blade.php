@extends('intranet.layout.users')
@section('content')
<div style="background-color:#1e1e2f; padding:20px; border-radius:5px;">
<div class="alert alert-info">
        <h1>Bienvenido Usuario {{ auth()->user()->name }}</h1>
    </div>
    
    <img src="Imagenes/cih.svg"><br><br>
</div>
    
@stop