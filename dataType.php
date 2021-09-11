<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Página de inicio</title>
</head>
<body>
    <?php 
        // Datos escalares
        $entero = 100;
        $negativos = -100;
        $octales = 0350;
        $hexadecimales = 0xa5;
        // Float - Decimales
        $a = 1.8e4;
        $b = 10.120; // Double
        // Strings
        $string = "Hola mundo";
        $stringComillasSimples = 'Hello world';
        /* Concatenación */
        echo "<p>".$string."</p>";
        /* 
            \n : Nueva línea
            \t : Tabulación
            \" : Comillas dobles
            \$ : Signo de dolar
            \r : Retorno de carro
            \\ : Barra invertida
        */
        // Booleans
        $verdadero = TRUE;
        $falso = FALSE;
        echo var_dump($falso);

        // Conversión de tipos
        $pitagoras = 3.1415;
        $entero = (int)$pitagoras;
        echo "<br />";
        echo var_dump($entero);

        // Impresión
        echo "<p>Hola mundo</p>";
        print($entero);

        // Constantes
        echo "<br />";
        define("MICONSTANTE", 3.141516);
        echo MICONSTANTE;

        echo "<p>Hecho en php V".PHP_VERSION."</p>";
    ?>
</body>
</html>