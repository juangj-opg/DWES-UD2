<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 - PHP</title>
</head>
<body>
<?php
// Definición de las 2 constantes:

define("diaria", 6);
define("semanal", 30);

// Definición de las dos variables

$OperacionDiaria = "7";
$OperacionSemanal = 32;

// Comprobantes con ECHO (IF no se puede usar porque no lo hemos dado)

echo "El valor de operaciones diarias es mayor o igual que el máximo: ", var_export($OperacionDiaria>=diaria);

echo "<br>El valor de operaciones semanales es mayor o igual que el máximo: ", var_export($OperacionSemanal>=semanal);

echo "<br>El valor de operaciones diarias es igual que el máximo: ", var_export($OperacionDiaria===diaria);

echo "<br>El valor de operaciones diarias es diferente que las operaciones semanales: ", var_export($OperacionDiaria!=$OperacionSemanal);

// Esto sería un ejemplo de IF, que no se va a usar:

/*if ($OperacionDiaria >= diaria) {
    printf("Las operaciones diarias es mayor igual que el máximo. (%u => %u).",$OperacionDiaria, diaria);
} */
?>
</body>
</html>