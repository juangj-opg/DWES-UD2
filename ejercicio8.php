<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 - PHP</title>
</head>
<body>
<?php
$variable = "Hola";

// Prueba con String
echo("<h2> String </h2>");
printf("Se ha creado la variable, con el siguiente contenido: %s", $variable);
echo "<br> Usando la función gettype(), podemos demostrar que es un tipo String: ", var_export(gettype($variable));
echo "<br> Otra forma de demostrarlo, es usando la función is_string(): ", var_export(is_string($variable));
echo "<br> Además, hay otra función, para demostrar que es númerica, o un string númerico, llamada is_numeric(): ", var_export(is_numeric($variable));
echo "<br> Una extra, para comprobar si es un string, integer, boolean o double(float), es la función is_scalar(): ", var_export(is_scalar($variable));


// Prueba de cambiar el valor por decimales.

echo "<h2> Double / Float </h2>";
printf("Hemos cambiado el valor y el tipo de la variable %s, a %.2f", $variable, (float)$variable=3.14); // Aquí hacemos la conversión de String a Float
echo "<br> Para comprobar que es un float, podemos usar la función is_float(): ", var_export(is_float($variable));
echo "<br> También, podemos usar la función is_numeric() para asegurar que es un número: ", var_export(is_numeric($variable));
echo "<br> Y podemos usar el primer ejemplo que usamos en los strings para obtener el tipo, la función gettype(): ", var_export(gettype($variable));

// Forzar cambio a integer
echo "<h2> Integer / Int </h2>";
printf("Vamos a forzar el cambio del float/double anterior a un Integer/int, para eso, usamos la conversión (int)\$variable");
printf("<br>Otra forma, es usar la función settype().<br>");

settype($variable, "integer");

echo "<br>Podemos ver el valor de la variable, que no debería tener decimales ahora: ", $variable; // Aqui forzamos que sea un Integer
echo "<br>Si comprobamos la función que usamos antes de is_float(), debe de dar false al ser un integer: ", var_export(is_float($variable));

// Nueva variable string, empezando por un número y forzarlo a integer

$variable2 = "17Hola";

echo "<h2> String empezando por un número </h2>";

printf("Hemos creado una nueva variable con el siguiente valor: %s", $variable2);
echo "<br>Si forzamos el string a transformarlo en un integer, ocurre lo siguiente, pasa de $variable2 a ", var_export((int)$variable2), ", quitando los caracteres.";


?>
</body>
</html>