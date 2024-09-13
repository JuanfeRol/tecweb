<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <?php
        require('src/funciones.php');

        if(isset($_GET['numero'])){
        $num = $_GET['numero'];
        multiplo($num);
        }
    ?>
    <h2>Ejercicio 2</h2>
    <p> Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una
        secuencia compuesta por: par - impar - par</p> 
    <?php
        generacionRepetitiva();
    ?>
</body>
</html>