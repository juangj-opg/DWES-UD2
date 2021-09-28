<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - PHP</title>
</head>
<body>
<?php
    define("descuento", 8); //El descuento por tarjeta cliente es del 8%.

    // Definición de variables

    //Pantalones
    $PrecioPantalon = 29.99; 
    $NumeroDePantalones = 3;

    $PantalonPrecio = $PrecioPantalon * $NumeroDePantalones; // Calculo del precio de los pantalones

    // Camisas

    $PrecioCamisa = 25.99;
    $NumeroDeCamisas = 2;

    $CamisasPrecio = $PrecioCamisa * $NumeroDeCamisas; // Calculo del precio de las camisas

    // Precio Total

    $PrecioTotal = $PantalonPrecio + $CamisasPrecio;

    // Precio con descuento

    $PrecioDescuento = $PrecioTotal * (1 - descuento / 100);
    
    
    // Mostrar mensajes en pantalla:

    printf("El precio de un pantalon es de %.2f. Has comprado %u unidad/es al coste de %.2f€.<br>", $PrecioPantalon, $NumeroDePantalones, $PantalonPrecio);

    printf("El precio de una camisa es de %.2f. Has comprado %u unidad/es al coste de %.2f€.<br>", $PrecioCamisa, $NumeroDeCamisas, $CamisasPrecio);

    printf("El precio total sin descuento es de %.2f€.<br>", $PrecioTotal);

    printf("El precio total con un %u%% de descuento es de %.2f€.", descuento, $PrecioDescuento);

?>
</body>
</html>