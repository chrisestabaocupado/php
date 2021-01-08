<?php 
/* 
Una variable superglobal es una variable predefinida que siempre
está accesible sin importar el alcanse.
*/
$nombre = $_POST['nombre'];
$pais = $_POST['pais'];
$edad = $_POST['edad'];

setcookie("nombre", "$nombre", time()+3600, '/');
setcookie("pais", "$pais", time()+3600, '/');
setcookie("edad", "$edad", time()+3600, '/');

header("location: dos.php");

?>