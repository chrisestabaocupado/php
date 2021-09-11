<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h4>While 1<=10</h1>
    <ul>
        <?php 
            // Varias formas de hacer lo mismo
            $a = 1;
            /*
                while($a<=10){
                    echo "<li>$a</li>";
                    ++$a;
                };
            */
            /*
                do{
                    echo "<li>$a</li>";
                    ++$a;
                }while($a<=10);
            */

            for($a; $a<=10; $a++){
                echo "<li>$a</li>";
            };
        ?>
    </ul>

    <h4>Días de la semana</h4>

    <ul>
        <?php 
        
            $array = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
            foreach ($array as $indice => $dia) {
                if($dia === "Miercoles"){
                    continue; // Si el dia el miercoles, no lo imprime
                    // break; si el día es miercoles, detiene el bucle
                }else{
                    echo "<li>$dia</li>";
                };
            };

        ?>
    </ul>
    
</body>
</html>