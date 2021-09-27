<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - PHP</title>
</head>
<body>
<?php
define("PI", 3.1416); // Definimos PI para más adelante

// Definición de las variables que se usaran en las formulas
$base = 4;
$altura = 5;

$triangulo = ($base * $altura) /2; // Formula del area del triangulo

printf("<p>El area del triangulo con base %ucm y altura %ucm, son %.2fcm.</p>", $base, $altura, $triangulo);


$cuadrado = $base *  $altura; // Formula del area del cuadrado.

printf("<p>El area del cuadrado con base %ucm y altura %ucm, son %.2fcm.</p>", $base, $altura, $cuadrado);

$D = 5; // Diagonal Mayor
$d = 4; // Diagonal Menor

$rombo = ($D * $d) / 2; // Area del Rombo

printf("<p>El area del rombo con %ucm de diagonal mayor y %ucm de diagonal menor, son %.2fcm.</p>", $D, $d, $rombo);

$radio = 5;

$circulo = PI * $radio * $radio;

printf("<p>El area del círculo con %ucm de radio, son %.2fcm.</p>", $radio, $circulo);



?>
</body>
</html>