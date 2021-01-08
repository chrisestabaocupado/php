<?php 

// Arrays

// Unidimencionales (predefinidos y asociativos)


// Predefinidos
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes');

// Con esta forma de declarar los arrays lo que se puede hacer
// es colocar el indice del valor que se va a agregar al array
// por ejemplo $dia[0] = 'Lunes';
$dia[] = 'Lunes';
$dia[] = 'Martes';
$dia[] = 'Miercoles';
$dia[] = 'Jueves';
$dia[] = 'Viernes';
// De todas formas, la forma más común de crear un array es con la función array();

$semana = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'];
// Otra forma de crear un array


// Asociativos
$carlos = array('nombre' => 'Carlos', 'apellido' => 'Gonzales' ,'edad' => 20);
$carlos = ['nombre' => 'Carlos', 'apellido' => 'Gonzales' ,'edad' => 20];

// Otra forma de crear un array asociativo
$andres["nombre"] = 'Andrés';
$andres["apellido"] = 'Lopez';
$andres["edad"] = 30;

echo $carlos['nombre'].' '.$carlos['apellido'].' - Edad: '.$carlos['edad'];

echo "<hr/>";

echo $andres['nombre'].' '.$andres['apellido'].' - Edad: '.$andres['edad'];

echo "<hr/>";
// Multidimencionales
// Varios arrays dentro de un mismo array
$datos = [
    "semana" => [
        ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'],
        ['Sabado', 'Domingo']
    ],
    ['Gato', 'Perro', 'Hamster', 'Loro'],
    "dueños" => ['Carlos', 'Andrés', 'Víctor', 'Leonardo']
];
// Se pueden asociar nombres en vez de indices a los arrays
// A su vez se pueden tener arrays asociativos y predefinidos simultaneamente
echo $datos["semana"][0][0];

echo "<br/>";

echo $datos[0][0];


?>