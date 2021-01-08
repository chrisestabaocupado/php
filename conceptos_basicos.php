<?php 

// .htacess - investigar

// Variables
$key = "value";

/*PhP tiene caps sensitive, es decir, 
los nombres de las variables son diferentes incluso 
si solo tienen una letra con una mayúscula diferente.*/
$variable = "valor";
$VARIABLE = "valor";
$vArIaBlE = "valor";

// Como saber que tipo de dato es el contenido de la variable
$a = 123;
echo var_dump($a);
echo "<br/>";
echo gettype($a);

echo "<hr/>";

// Tambien puedes llamar a una variable dentro de un string solo con comillas dobles
echo "El valor de 'a' es: $a";

echo "<hr/>";

// Tipos de Datos

$a = 123;   # INTEGER
$b = -123;  # ENTERO NEGATIVO
$c = 0350;  #  Octales
$d = 0xa5;  # Hexadecimales

$e = 1.8e4;  # FLOAT
$f = 1.123; # FLOAT

$g = 'HOLA MUNDO';   # STRING
/*

\n : Nueva linea
\r : Retorno de carro
\t : Tabulación
\\ : Barra invertida
\$ : Signo de Dólar
\" : Comillas dobles

*/

$h = TRUE;   # Boolean (Verdadero = 0)
$i = FALSE; # Bolean (Falso = 1)

// Concatenación
$nombre = 'Christopher';
$apellido = "Glood";

echo $nombre." ".$apellido;

echo "<hr/>";

// Constantes
define('PI', 3.141516);
echo PI;

echo "<hr/>";

// Operadores

// Aritmeticos
$adicion = 1+1;
$sustraccion = 1-1;
$multiplicacion = 2*2;
$division = 6/3;
$resto = 100%6;
$potenciacion = 5**2;

// De asignación
/*

=
+=
-=
*=
%=

*/

// De comparación
/*

==  (IGUALDAD)
=== (IGUALDAD DEL MISMO TIPO)
!=  (DIFERENTE)
<>  (DIFERENTE)
<   (MENOR QUE)
>   (MAYOR QUE)
<=  (MENOR O IGUAL QUE)
>=  (MAYOR O IGUAL QUE)

<=> (NAVE ESPACIAL)
Si en la comparacion un numero es menor que el otro da -1
Si es igual da 0 y es mayor da 1

?   (TERNARIO)
Un if muy resumido
$a > $b = "Mayor" : "Menor";
El : es equivalente al else

??  (FUSION NULL)
$a ?? $b ?? 'NO EXISTE'
si a no existe que tome el valor de la variable
si aun asi no existe se coloca un valor por defecto
*/


// De incremento y Decremento
/*

++$a    (Suma 1 antes de la ejecucion)
$a++    (Suma 1 despues de la ejecucion)
--$a    (Resta 1 antes de la ejecución)
$a--    (Suma 1 antes de la ejecucion)

*/

// Lógicos
/*

&& (AND)
||  (OR)
xor (QUE SE CUMPLA UNO SOLO, CUALQUIERA DE LOS DOS, PERO NO AMBOS)
or  (QUE CUALQUIERA DE LOS DOS SE CUMPLA)
!   (QUE NO SE CUMPLAN)


*/
?>