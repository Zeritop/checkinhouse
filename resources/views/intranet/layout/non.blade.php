<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="/../css/sidebar.css">  
    <script src="{{ asset('../js/sidebar.js') }}" defer></script>
    
    <style>
        body{
            background-color: rgba(0, 0, 0, .1);
        }
    </style>

</head>
<body>
    
    @if(session()->has('flash'))
    <div class="alert alert-info"> {{ session('flash') }}</div>
    @endif
 @yield('content')


</body>
</html>