<?php 
/*
r : solo lectura, coloca el puntero al comienzo del documento.
r+ : lectura y escritura, coloca el puntero al comienzo del documento
w : solo escritura, coloca el puntero al comienzo del documento y sobreescribe el contenido preexistente
w+ : lectura y escritura, coloca el puntero al comienzo del documento y sobreescribe el contenido preexistente
a : apertura solo escritura, coloca el puntero al final del documento, si el fichero no existe, se intenta crear
a+ : apertura lectura y escritura, coloca el puntero al final del documento, si el fichero no existe, se intenta crear
x : creacion y apertura solo escritura, coloca el puntero al principio del documento, si el fichero ya existe causa un error, si no existe se intenta crear
x+ : creacion y apertura, escritura y lectura, coloca el puntero al principio del documento, si ya existe causa error,  si no existe se intenta crear
c : solo lectura, si el fichero no existe se crea uno nuevo, si ya existe no sobre escribe ni genera error, el puntero se coloca al principio del documento
c : lectura y escritura, posee el mismo comportamiento que c
*/
$autor = $_POST["autor"];
$mensaje = $_POST["mensaje"];


$solicitud = fopen("miarchivo.txt", "w");

fwrite($solicitud, "Autor:$autor \r\n");
fwrite($solicitud, "Mensaje: \r\n");
fwrite($solicitud, $mensaje."\r\n");

echo "LISTO";

fclose($solicitud);

?>