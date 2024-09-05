<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
    <head>
        <title> Práctica 5 </title>
    </head>
<body>
    <h2>Ejercicio 1</h2>
        <?php
            // Definimos variables y sus explicaciones para mostrarlas en pantalla
            $_myvar = '$_myvar es una variable válida porque empieza con $ y contiene caracteres permitidos.';
            $_7myvar = '$_7myvar es una variable válida porque empieza con $ y contiene caracteres permitidos.';
            $myvar = '$myvar es una variable válida porque empieza con $ y contiene caracteres permitidos.';
            $var7 = '$var7 es una variable válida porque empieza con $ y contiene caracteres permitidos.';
            $_element1 = '$_element1 es una variable válida porque empieza con $ y contiene caracteres permitidos.';

            // Ejemplos de identificadores no válidos
            // 'myvar' no es una variable válida porque no empieza con $.
            // '$house*5' no es una variable válida porque el * no es un carácter permitido.

            echo $_myvar . '<br><br>';
            echo $_7myvar . '<br><br>';
            echo 'myvar no es una variable válida porque no empieza con $<br><br>';
            echo $myvar . '<br><br>';
            echo $var7 . '<br><br>';
            echo $_element1 . '<br><br>';
            echo '$house*5 no es una variable válida porque contiene un carácter no permitido (*).<br><br>';
        ?>
    <h2>Ejercicio 2</h2>
        <?php
            
        ?>
</body>
</html>