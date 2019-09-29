<?php
session_unset();
?> 
<html>
 <head>
  <title>Bienvenido, Inicia Sesión</title>
 </head>
 <body>
  <form method="post" action="comprobar.php">
   <p>Introduce el usuario: 
    <input type="text" name="usuario"/>
   </p>
   <p>Introduce la contraseña: 
    <input type="password" name="contra"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Entrar"/>
   </p>
  </form>
 </body>
</html>