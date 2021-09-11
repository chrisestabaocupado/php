<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php 
        // Este es un comentario como en Javascript 
        /*
            Este es un comentario
            Multilínea
        */

        // Variables
        $a = "mi primer codigo de PhP";
        echo $a;
        echo "<br/>";
        echo "Este es $a";
        /*
             Con comillas doble puedes invocar variables, con las simples no ya que lo convierte en texto puro
        */
        echo "<br/>";
        // Cómo obtener el tipo de dato
        echo var_dump($a);
    ?>
</body>
</html>