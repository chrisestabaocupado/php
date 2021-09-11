<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php 
        // Arrays
        /*
            Unidimensionales
                Predefinidos
                Asociativos
            Multidimensionales
                Predefinidos
                Asociativos
        */

        /*$semana[] = "Lunes";
        $semana[] = "Martes";
        $semana[] = "Miercoles";
        $semana[] = "Jueves";
        $semana[] = "Viernes";*/

        //$semana = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes");

        // Esta es la forma más eficiente de declarar un array
        // Este es un array predefinido
        $semana = [
            "Lunes",
            "Martes",
            "Miercoles",
            "Jueves",
            "Viernes",
            "Sabado",
            "Domingo"
        ];

        // Este es un array asociativo
        /*$numeros["uno"] = 1;
        $numeros["dos"] = 2;
        $numeros["tres"] = 3;
        $numeros["cuatro"] = 4;
        $numeros["cinco"] = 5;*/

        /*$numeros = array(
            "uno" => 1,
            "dos" => 2,
            "tres" => 3,
            "cuatro" => 4,
            "cinco" => 5
        );*/

        $numeros = [
            "uno" => 1,
            "dos" => 2,
            "tres" => 3,
            "cuatro" => 4,
            "cinco" => 5
        ];

        echo "<h3>".$numeros["cinco"]."</h3>";

        foreach ($semana as $dia) {
            echo "<p>$dia</p>";
        };

        // Arrays multidimensionales
        // Array multidimensional asociativo
        $array = [
            "numeros" => [100, 200, 300, 400, 500],
            "animales" => ["Loro", "Perro", "Gato"]
        ];

        echo "<h4>".$array["animales"][0]."</h4>"
    ?>
</body>
</html>