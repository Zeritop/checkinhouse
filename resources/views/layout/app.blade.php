<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <Title>Login</Title>
       <link rel="shortcut icon" type="image/x-icon" href="Imagenes/definitivo.ico">
    
    <link rel="stylesheet"  href="/css/app.css">
    
    <style>
        body{
            background-color: #32325d;
            font-family: 'Nova Flat', cursive;
            color: lightgreen;
        }
    </style>
</head>
<body>
    
    
    <div class="container">
        <br><br>
        @if (session()->has('flash'))
        <div class="alert alert-info">{{ session('flash')}}</div>
        @endif
        
        @yield('content')
    </div>
</body>

</html>
