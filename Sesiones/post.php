<?php
$user = $_POST["username"];
$password = $_POST["password"];

if($user === "christopher" || $password === "wasd"){
    echo "<h1>Bienvenido $user!</h1>";
}else{
    echo "<h1>Los datos introducidos son erroneos, por favor, revise nuevamente</h1>";
    echo "<br />";
    echo "<a href=\"/proyecto/Sesiones/forms.html\">Regresar a la página de inicio</a>";
}

?>