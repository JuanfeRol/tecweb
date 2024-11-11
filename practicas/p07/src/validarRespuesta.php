<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
    <head>
        <title> Validación </title>
    </head>
    <body>
    <h1>Ejercicio 5 - Validacion de sexo y edad</h1>
    <?php
        $sexo = $_POST['sexo'];
        $edad = $_POST['edad'];
        if($sexo == 'M' && $edad >= 18 && $edad <= 35){
            echo '<h2>Bienvenida, usted está en el rango de edad permitido</h2>';
        }else{
            echo '<h2>Lo sentimos, usted no cumple con los requisitos</h2>';
        }
    ?>
    </body>
</html>
