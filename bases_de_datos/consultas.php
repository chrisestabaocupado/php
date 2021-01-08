<?php 

include("conexion.php");

$solicitud = "SELECT * FROM datos";

$resultado = mysqli_query($conexion, $solicitud);


while( $fila = mysqli_fetch_array($resultado) ){
    echo "Nombre: ".$fila['nombre']." ".$fila['apellido'];
    echo "<br/>";
    echo "Edad: ".$fila['edad'];
    echo "<br/>";
    echo "Celular: ".$fila['celular'];
    echo "<br/>";
    echo "<a href='eliminar.php?id=" .$fila["id"]."'>Eliminar</a>";
    echo "<a href='actualizar.php?id=" .$fila["id"]."'>Actualizar Celular por Defecto</a>";
    echo "<hr/>";
}
?>