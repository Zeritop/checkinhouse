<!DOCTYPE html>
<?php
  session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysql_real_escape_string($db,$_POST['username']);
      $mypassword = mysql_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysql_query($db,$sql);
      $row = mysql_fetch_array($result,MYSQL_ASSOC);
      $active = $row['active'];
      
      $count = mysql_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title>Check In House</title>



</head>
@extends('intranet.layout.non')

@section('content')
<body>
	
  <br>




    <div class="container text-center">
      <hr style="background-color: #E8F312; height: 1px;">
      <h5><Strong>Wenas Cabros Aqui ta el login</Strong></h5>
        <div class="row mt-3">
          <form action="/action_page.php">
  
            <img src="Imagenes/cef.png" width="720" height="280" class="d-inline-block align-top"- alt="">    
    

  <div class="container" >
     
        <label for="uname"><b>Usuario</b></label><br>
    <input type="text" placeholder="Usuario" name="uname" required><br>

    <label for="psw"><b>Contrase&ntilde;a</b></label><br>
    <input type="password" placeholder="Contrase&ntilde;a" name="psw" required><br>
        
    <a class="btn btn-primary" href="intranet">Ingresar</a><br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Recuerdame
    </label>      
     
    
  </div>
<script type="text/javascript">
  de
</script>
  <br>
  <br>
</form>
          

        </div>
        <hr style="background-color: #E8F312; height: 1px;">
    </div>
  <br>


  
<script src="js-bootstrap/jquery-3.2.1.min.js"></script>
<script src="js-bootstrap/bootstrap.min.js"></script>
</body>
</html>
@stop