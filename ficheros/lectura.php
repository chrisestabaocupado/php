<?php 

$solicitud = fopen("miarchivo.txt", "r");

while (!feof($solicitud)) {
    $leer = fgets($solicitud);
    $ver = nl2br($leer);
    echo $ver;
}

?>