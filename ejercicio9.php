<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 - PHP</title>
</head>
<body>
<?php
echo "<H2> Muestra de las variables de \$_SERVER</H2>";

echo "\$_SERVER es un array con más variables en su interior, pero solo veremos unas cuantas: ";
echo " <ul> ";
    echo "<li> <b> PHP_SELF: </b>\"",$_SERVER["PHP_SELF"], "\" - Muestra donde está ubicado actualmente.";
    echo "<li> <b> SERVER_ADDR: </b>\"",$_SERVER["SERVER_ADDR"], "\" - Muestra la dirección física / IP en uso.";
    echo "<li> <b> SERVER_NAME: </b>\"",$_SERVER["SERVER_NAME"], "\" - Muestra el nombre del servidor.";
    echo "<li> <b> DOCUMENT_ROOT: </b>\"",$_SERVER["DOCUMENT_ROOT"], "\" - Muestra la rama raiz.";
    echo "<li> <b> REMOTE_ADDR: </b>\"",$_SERVER["REMOTE_ADDR"], "\" - Muestra la dirección remota.";
    echo "<li> <b> REQUEST_METHOD: </b>\"",$_SERVER["REQUEST_METHOD"], "\" - Muestra el tipo de Request, si es POST o GET.";
echo " </ul>";

echo "<H2> Crear una función </H2>";

function CrearVariables(){
    // Variable local:
    $VariableLocal = 10;
    
    // Variable estatica
    STATIC $VariableEstatica = 5;

    //Se probará una variable global dentro de la función
    // $_SERVER es una variable global, por lo que podemos probar.
    $a = $_SERVER["SERVER_ADDR"];
    echo "Se ha probado abrir una variable local dentro de la función: ",$a;
}

CrearVariables();

// Se ejecuta la función y mostramos el mensaje.

// Al crear una variable local, se crea únicamente para esa función, fuera no funcionará.
echo "<br>Se mostrará la variable local definido en la función, pero fuera de la función: $VariableLocal";

// Y aquí ocurre lo mismo que en el anterior
echo "<br>Se mostrará la variable estatica definido en la función, pero fuera de la función: $VariableEstatica";

echo "<br><br>No mostrará ninguna respuesta, ya que, ambas variables se crearon dentro de la función. Si se hubiesen creado anteriormente, podría funcionar."

?>
</body>
</html>