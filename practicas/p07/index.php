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

    <h2>Ejercicio 3 </h2>
    <p>Utiliza un ciclo while para encontrar el primer número entero obtenido aleatoriamente,
    pero que además sea múltiplo de un número dado.<br>
    • Crear una variante de este script utilizando el ciclo do-while.<br>
    • El número dado se debe obtener vía GET.<br></p>
    <?php
       if(isset($_GET['numero'])){
        $num = $_GET['numero'];
        enteroMultiplo($num);
        enteroMultiploDW($num);
        }    
    ?>



</body>
</html>