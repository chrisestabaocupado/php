<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php 
    
        // Operadores aritmeticos
        $a = 5;
        $b = 10;
        // Suma
        $suma = $a+$b;
        echo "<p>Suma: ".$suma."</p>";
        // Resta
        $resta = $a-$b;
        echo "<p>Resta: ".$resta."</p>";
        // Multiplicación
        $multiplicacion = $a*$b;
        echo "<p>Multiplicacion: ".$multiplicacion."</p>";
        // Division
        $division = $a/$b;
        echo "<p>División: ".$division."</p>";
        // Resto
        $resto = $a%$b;
        echo "<p>Resto: ".$resto."</p>";
        // Potenciación
        $potenciacion = 2**$a;
        echo "<p>potenciación: ".$potenciacion."</p>";

        // Operadores de asignación
        $b = $a;
        $a+=$b;
        echo "<p>$a</p>";
        $a-=$b;
        echo "<p>$a</p>";
        // Se puede hacer lo mismo con todos los operadores aritmeticos
        /* Ej: %= , *= */

        // Operadores de comparación
        /*
            ==  (Igualdad)
            ==  (Igualdad del mismo tipo)
            !=  (Negación)
            <>  (Diferente)
            <   (Menor que)
            >   (Mayor que)
            <=  (Menor o igual que)
            >=  (Mayor o igual que)
            <=> (Nave espacial)
            ?   (Ternario)
            ??  (Fusion null)
                Ej: $a ?? $b ?? "No existe";
                Si no existen los primeros dos valores se le asigna uno por defecto, pero si existen se quedara con el primero que encuentre, por ejemplo si no existe "a" pero existe "b" se quedará con el valor de b.
        */
        $c = 10;
        $d = 5;
        if($c <> $d){
            echo "<p>Es diferente</p>";
        }else{
            echo "<p>Son iguales</p>";
        };

        /* 
            Si c es menor que d el resultado será -1,
            si es igual será 0,
            si es mayor será 1.
        */

        $spaceShip = $c <=> $d;
        echo "<p>".$spaceShip."</p>";

        // Esto representa lo mismo que hicimos con la sentencia if y el operador de diferencia
        echo $c==$d ? "<p>IGUAL</p>" : "<p>DIFERENTE</p>";

        // Operadores de incremento y decremento
        ++$a;   // Suma 1 antes de la ejecución
        $a++;   // Después de la ejecución
        --$a;   // Resta 1 antes de la ejecución
        $a--;   // Después de la ejecución

        // Operadores lógicos
        /*
            && - AND
            OR  - ||
            XOR - QUE SE CUMPLA CUALQUIERA DE LOS DOS PERO NO LOS DOS AL MISMO TIMEPO
            ! SI NO SE CUMPLE
        */
    ?>
</body>
</html>