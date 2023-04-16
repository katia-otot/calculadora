<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="formulario.html">Calculadora</a></li>
            <li><a href="pi.php">Número pi</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
    </nav>
    </body>
</html>
<?php
$operacion = $_POST['operacion'];
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

if(isset($numero1, $numero2) & !empty($numero1) & !empty($numero2)) {
    $resultado = 0;

    switch ($operacion) {
        case 'sumar':
        $resultado = $numero1 + $numero2;
            echo "<p> Resultado: $resultado <p>";
            break;
        case 'restar':
            $resultado =  $numero1 - $numero2;
            echo "<p> Resultado: $resultado <p>";
            break;
        case 'dividir':
            if ($numero2 != 0){
                $resultado =   $numero1 / $numero2;
                echo "<p> Resultado: $resultado <p>";
            }
            else{
                echo "no es posible dividir";
            }
            break;
        case 'multiplicar':
            $resultado =  $numero1 * $numero2;
            echo "<p> Resultado: $resultado <p>";
            break;
        default:
            echo "no es posible";
            break;
    }
}

else {
    echo "<p> Faltan completar datos <p>";
}