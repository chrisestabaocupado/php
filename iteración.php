<?php 

$a = 0;

while ($a <= 10) {
    echo $a." / ";
    $a++;
}

echo "<hr/>";

$a = 5;

do{
    echo $a." / ";
    $a++;
}while($a <= 10);

echo "<hr/>";

for ($b = 0; $b<=20; $b++){
    echo $b." / ";
}

echo "<hr/>";

$c = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes');
foreach($c as $a => $b){
    echo $a." - ".$b."<br/>";
}
?>