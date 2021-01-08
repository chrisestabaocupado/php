<?php 

$nombre = $_COOKIE["nombre"];
$pais = $_COOKIE["pais"];
$edad = $_COOKIE["edad"];

echo "Hola $nombre"."!";
echo "<br/>";
echo "Eres de $pais".", no?";
echo "<br/>";
echo "Y tienes $edad"." años";


?>