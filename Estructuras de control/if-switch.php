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
    <?php 
        $a = 20;

        if($a<10){
            echo "<p>$a es menor que 10</p>";
        }elseif($a===20){
            echo "<p>Es 20</p>";
        }elseif($a===10){
            echo "<p>Es 10</p>";
        }else{
            echo "<p>$a es mayor que 10</p>";
        };

        // Si la variable existe y no está vacía...
        if(isset($a) && !empty($a)) echo "<p>La variable existe y no está vacía</p>";

        switch ($a) {
            case 1:
                echo "<p>Es 1</p>";
                break;
            case 2:
                echo "<p>Es 2</p>";
                break;
            default:
               echo "<p>No se encuentra en ninguno de los casos</p>";
                break;
        }
    ?>
</body>
</html>