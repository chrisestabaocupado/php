<?php 
/*
Los nombres de las funciones pueden comenzar con guiones bajos
pero no pueden comenzar ni con numeros, ni con carácteres especiales
Los nombres de las funciones tampoco son sensibles a mayusculas.
*/
function _hola(){
    echo "Hola mundo";
    echo "<hr/>";
}
_hola();


function suma($num1, $num2){
    $total = $num1 + $num2;
    echo $total;
    echo "<hr/>";
}
suma(3,1);


// Puedes asignarle un valor por defecto a los parametros
// para ser usado en caso de que no se reciba un argumento
function mensaje($mensaje="Hola a todos!"){
    echo $mensaje;
    echo "<hr/>";
}
mensaje();

function suamreturn($num1, $num2){
    $total = $num1 + $num2;
    return $total;
}
echo suamreturn(1,5);
echo "<hr/>";

?>