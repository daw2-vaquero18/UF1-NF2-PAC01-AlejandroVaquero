<?php
session_start();

//si la session de authuser es diferente ce 1 es que no estan correctos los datos y sale mensaje de que no tienen permisos
if ($_SESSION['authuser'] != 1){
    echo "Lo siento, no tienes permisos para ver esta página!";
    exit();     
}
?>
<html>
 <head>
  <title>Mi pelicula favorita <?php echo $_GET['favmovie'];?></title>
 </head>
 <body>
<?php
echo "Bienvenido, ";
echo $_SESSION["username"];
echo "! <br/>";

echo "Mi pelicula favorita es  ";
echo $_GET['favmovie'];
$movierate = 5;
echo "! <br/>";
echo "El ranking de mi pelicula es: ";
echo $movierate;
echo "! <br/>";

date_default_timezone_set("America/New_York");
$mes = date('M'); 
$dia = date('d'); 
$year = date('o');

echo "Hoy, día " .$dia. " de " .$mes. " del " .$year;

?>
 </body>
</html>


