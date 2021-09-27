<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - PHP</title>
</head>
<body>
<?php
    $nombre = "Juan Garrido Jiménez";
    $poblacion = "Sevilla";
    $edad = 21;

    echo "Soy $nombre, tengo $edad años de edad y vivo en $poblacion.<br><br>";

    printf("Soy %s, tengo %u años de edad y vivo en %s.", $nombre, $edad, $poblacion);
?>
</body>
</html>