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
    <h1>Hola
    <?php 
        session_start();
        echo $_SESSION["nombre"];
    ?>
    </h1>
    <?php
        echo "<h4>"."Su sessionID es: ".session_id()."</h4>";
    ?>
</body>
</html>