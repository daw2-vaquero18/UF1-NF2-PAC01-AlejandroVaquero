<?php
session_start();
$_SESSION['username'] = $_POST['usuario'];
$_SESSION['userpass'] = $_POST['contra'];
$_SESSION['authuser'] = 0;

//Comprobamos la informacion del usuario y contraseña
if (($_SESSION['username'] == 'alejandro') and
    ($_SESSION['userpass'] == '123456')) {
    $_SESSION['authuser'] = 1;
} else {
    echo 'Lo siento, no tienes permisos para ver esta página!';
    exit();     
}
?>
<html>
 <head>
  <title>Encuentra mi pelicula favorita!</title>
 </head>
 <body>
<?php
$myfavmovie = urlencode("Peter Pan");
echo "<a href='informacionpelicula.php?favmovie=$myfavmovie'>";
echo "Haz click para ver más información de la pelicula!"; 
echo "</a>";
?>
 </body>
</html>

