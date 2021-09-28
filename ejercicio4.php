<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - PHP</title>
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

    printf("El precio total sin descuento es de     %.2f€.<br>", $PrecioTotal);

    printf("El precio total con un %u%% de descuento es de %.2f€.<br><br>", descuento, $PrecioDescuento);

    // Extensión ejercicio 4 - Añadir zapatos (Solo 1);

    $PrecioZapatos = 45.99;
    $DescuentoZapateria = 12;

    // Mostramos el mensaje porque el valor cambiará

    printf("El precio de los zapatos sin descuento es de %.2f<br>", $PrecioZapatos);

    // Hacemos ahora el descuento de los zapatos y mostramos el mensaje
    
    $PrecioZapatos *= (1 - $DescuentoZapateria / 100);

    printf("El precio los zapatos con descuento es de %.2f<br>", $PrecioZapatos);

    // Y finalmente, la suma del total

    $PrecioDescuento += $PrecioZapatos;
    printf("El total de la cuenta es de %.2f<br>", $PrecioDescuento);  

?>
</body>
</html>