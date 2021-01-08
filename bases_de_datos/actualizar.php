<?php 

include('conexion.php');
$id = $_GET["id"];
$solicitud = "UPDATE datos SET celular=00001 WHERE id=$id";
$resultado = mysqli_query($conexion, $solicitud);

header("location: consultas.php")

?>