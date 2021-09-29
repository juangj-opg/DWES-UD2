<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - PHP</title>
</head>
<body>
<?php
// Definicion de dos variables enteros

$V1 = 3743;
$V2 = 239;

// Mostrar ambas variables en binario con printf (Usando %b);

echo("<h3> Valores en binarios</h3>");

printf("El valor en binario de la variable 1, es %b.", $V1);

printf("<br>El valor en binario de la variable 2, es %b.", $V2);

echo("<h3> Operador AND</h3>");

printf("<br>El resultado de la operación de comparación bit a bit AND es: %b.", $V1 & $V2);

echo("<h3> Operador OR</h3>");

printf("<br>El resultado de la operación de comparación bit a bit OR es: %b.", $V1 | $V2);

echo("<h3> Operador XOR</h3>");

printf("<br>El resultado de la operación de comparación bit a bit XOR es: %b.", $V1 ^ $V2);

echo("<h3> Operador NOT</h3>");

printf("<br>El resultado de la operación bit a bit NOT con el valor 1, es: %s (%b).", ~$V1, ~$V1);

printf("<br>El resultado de la operación bit a bit NOT con el valor 2, es: %s (%b).", ~$V2, ~$V2);


?>
</body>
</html>