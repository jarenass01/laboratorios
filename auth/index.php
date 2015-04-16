<?php
   if ((@$_SERVER['PHP_AUTH_USER'] != 'cprg') || (@$_SERVER['PHP_AUTH_PW'] != 'secretpassword')) {
      header('WWW-Authenticate: Basic Realm="Ingreso Reporter"');
      header('HTTP/1.0 401 Unauthorized');
      print('<h1>Por favor ingrese sus credenciales para abrir reporter</h1>');
      exit;
   }
?>
<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Hola mundo</h1>
    </body>
</html>
