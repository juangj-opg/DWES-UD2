<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "Hola mundo. <br>";
echo "<br>", "Hola ", "mundo", ".", "<br>";

$a = "<br>Hola mundo. <br>";
print($a);

$b = "mundo. <br>";
printf("<br> Hola %s", $b);

/*$form = "<br> Hola %s";
$c = "mundo. <br";
sprintf($form, $c);*/

phpinfo();

?>
</body>
</html>


