<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <h2>Hola {{ $name}}, gracias por registrarte en <strong>Check in house</strong></h2>
      <p>Por favor confirma tu correo electrónico.</p>
      <p>Para confirmar debes hacer click en el siguiente enlace:</p>

      <a href="{{ url('/register/verify/' . $confirmation_code) }}">Click para confirmar email</a>
  </body>
</html>
