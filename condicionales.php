<?php 
// Estructuras de control

$a = 120;
if($a < 100){
    echo "Es menor que 100";
}else{
    echo "Es mayor que 100";
}

echo "<br />";

// Si la variable existe y no está vacía haces x cosa
if(isset($a) && !empty($a)){
    echo "La variable existe y no está vacía";
}else{
    echo "La variable no existe o está vacía";
};

echo "<br />";

$b = 1;
if ($b == 1){
    echo "Es uno";
}else if ($b == 2){
    echo "Es dos";
}else if ($b ==3){
    echo "Es tres";
}else{
    echo "Es un número mayor que tres";
}

echo "<br />";

$c = 4;

switch ($c) {
    case 1:
        echo "Es uno";
        break;
    case 2:
        echo "Es dos";
        break;
    case 3:
        echo "Es tres";
        break;
    default:
        echo "No es ninguno de los anteriores";
        break;
}
?>