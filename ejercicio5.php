<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - PHP</title>
</head>
<style>
    table, td, tr{
        border: 1px solid black;
    }
    .Tr{
        background-color: rgba(60,220,60,0.5);
    }
    .Fl{
        background-color: rgba(220,60,60,0.5);
    }
</style>
<body>

<h2> Tabla de verdad de operador AND</h2>
    <table>
        <tr>
            <td><b>Variable1</b></td>
            <td><b>Variable2</b></td>
            <td><b>Variable3</b></td>
            <td><b>Resultado</b></td>
        </tr>
        <tr>
            <td class="Fl"> <?php $V1 = false; var_export($V1); ?></td>
            <td class="Fl"> <?php $V2 = false; var_export($V2); ?></td>
            <td class="Fl"> <?php $V3 = false; var_export($V3); ?></td>
            <td class="Fl"> <?php var_export($V1 && $V2 && $V3); ?></td>
        </tr>
        <tr>
            <td class="Tr"> <?php $V1 = true; var_export($V1); ?></td>
            <td class="Fl"> <?php $V2 = false; var_export($V2); ?></td>
            <td class="Fl"> <?php $V3 = false; var_export($V3); ?></td>
            <td class="Fl"> <?php var_export($V1 && $V2 && $V3); ?></td>
        </tr>
        <tr>
            <td class="Fl"> <?php $V1 = false; var_export($V1); ?></td>
            <td class="Tr"> <?php $V2 = true; var_export($V2); ?></td>
            <td class="Fl"> <?php $V3 = false; var_export($V3); ?></td>
            <td class="Fl"> <?php var_export($V1 && $V2 && $V3); ?></td>
        </tr>
        <tr>
            <td class="Fl"> <?php $V1 = false; var_export($V1); ?></td>
            <td class="Fl"> <?php $V2 = false; var_export($V2); ?></td>
            <td class="Tr"> <?php $V3 = true; var_export($V3); ?></td>
            <td class="Fl"> <?php var_export($V1 && $V2 && $V3); ?></td>
        </tr>
        <tr>
            <td class="Tr"> <?php $V1 = true; var_export($V1); ?></td>
            <td class="Tr"> <?php $V2 = true; var_export($V2); ?></td>
            <td class="Fl"> <?php $V3 = false; var_export($V3); ?></td>
            <td class="Fl"> <?php var_export($V1 && $V2 && $V3); ?></td>
        </tr>
        <tr>
            <td class="Tr"> <?php $V1 = true; var_export($V1); ?></td>
            <td class="Fl"> <?php $V2 = false; var_export($V2); ?></td>
            <td class="Tr"> <?php $V3 = true; var_export($V3); ?></td>
            <td class="Fl"> <?php var_export($V1 && $V2 && $V3); ?></td>
        </tr>
        <tr>
            <td class="Fl"> <?php $V1 = false; var_export($V1); ?></td>
            <td class="Tr"> <?php $V2 = true; var_export($V2); ?></td>
            <td class="Tr"> <?php $V3 = true; var_export($V3); ?></td>
            <td class="Fl"> <?php var_export($V1 && $V2 && $V3); ?></td>
        </tr>
        <tr>
            <td class="Tr"> <?php $V1 = true; var_export($V1); ?></td>
            <td class="Tr"> <?php $V2 = true; var_export($V2); ?></td>
            <td class="Tr"> <?php $V3 = true; var_export($V3); ?></td>
            <td class="Tr"> <?php var_export($V1 && $V2 && $V3); ?></td>
        </tr>        
    </table>

<h2> Tabla de verdad de operador OR</h2>
    <table>
        <tr>
            <td><b>Variable1</b></td>
            <td><b>Variable2</b></td>
            <td><b>Variable3</b></td>
            <td><b>Resultado</b></td>
        </tr>
        <tr>
            <td class="Fl"> <?php $V1 = false; var_export($V1); ?></td>
            <td class="Fl"> <?php $V2 = false; var_export($V2); ?></td>
            <td class="Fl"> <?php $V3 = false; var_export($V3); ?></td>
            <td class="Fl"> <?php var_export($V1 || $V2 || $V3); ?></td>
        </tr>
        <tr>
            <td class="Tr"> <?php $V1 = true; var_export($V1); ?></td>
            <td class="Fl"> <?php $V2 = false; var_export($V2); ?></td>
            <td class="Fl"> <?php $V3 = false; var_export($V3); ?></td>
            <td class="Tr"> <?php var_export($V1 || $V2 || $V3); ?></td>
        </tr>  
        <tr>
            <td class="Fl"> <?php $V1 = false; var_export($V1); ?></td>
            <td class="Tr"> <?php $V2 = true; var_export($V2); ?></td>
            <td class="Fl"> <?php $V3 = false; var_export($V3); ?></td>
            <td class="Tr"> <?php var_export($V1 || $V2 || $V3); ?></td>
        </tr>   
        <tr>
            <td class="Fl"> <?php $V1 = false; var_export($V1); ?></td>
            <td class="Fl"> <?php $V2 = false; var_export($V2); ?></td>
            <td class="Tr"> <?php $V3 = true; var_export($V3); ?></td>
            <td class="Tr"> <?php var_export($V1 || $V2 || $V3); ?></td>
        </tr>
        <tr>
            <td class="Tr"> <?php $V1 = true; var_export($V1); ?></td>
            <td class="Tr"> <?php $V2 = true; var_export($V2); ?></td>
            <td class="Fl"> <?php $V3 = false; var_export($V3); ?></td>
            <td class="Tr"> <?php var_export($V1 || $V2 || $V3); ?></td>
        </tr>   
        <tr>
            <td class="Tr"> <?php $V1 = true; var_export($V1); ?></td>
            <td class="Fl"> <?php $V2 = false; var_export($V2); ?></td>
            <td class="Tr"> <?php $V3 = true; var_export($V3); ?></td>
            <td class="Tr"> <?php var_export($V1 || $V2 || $V3); ?></td>
        </tr>
        <tr>
            <td class="Fl"> <?php $V1 = false; var_export($V1); ?></td>
            <td class="Tr"> <?php $V2 = true; var_export($V2); ?></td>
            <td class="Tr"> <?php $V3 = true; var_export($V3); ?></td>
            <td class="Tr"> <?php var_export($V1 || $V2 || $V3); ?></td>
        </tr>
        <tr>
            <td class="Tr"> <?php $V1 = true; var_export($V1); ?></td>
            <td class="Tr"> <?php $V2 = true; var_export($V2); ?></td>
            <td class="Tr"> <?php $V3 = true; var_export($V3); ?></td>
            <td class="Tr"> <?php var_export($V1 || $V2 || $V3); ?></td>
        </tr>
    </table>
</body>
</html>