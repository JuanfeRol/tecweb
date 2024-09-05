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
            $a = "ManejadorSQL";
            $b = "MySQL";
            $c = &$a;
            echo "a = $a, b = $b, c = $c<br>";

            $a = "PHP server";
            $b = &$a;

            echo "a = $a, b = $b<br>";

            echo '<p>Se modificaron los valores de a y b directamente, al ser c definido por referencia a la variable "a", su valor también se modifica </p>';
        ?>
    <h2>Ejercicio 3</h2>
        <?php
            // Asignamos el valor inicial a $a
            $a = "PHP5";
            // Mostramos el contenido de $a y su tipo
            echo "Después de la asignación \$a = 'PHP5':<br>";
            echo "a = $a, tipo = " . gettype($a) . "<br><br>";

            // Creamos un array $z y asignamos por referencia el valor de $a
            $z[] = &$a;
            // Mostramos el contenido de $z y $a, y los tipos
            echo "Después de la asignación \$z[] = ";
            print_r($z);
            echo ":<br>";

            // Asignamos un nuevo valor a $b
            $b = "5a version de PHP";
            // Mostramos el contenido de $b y su tipo
            echo "<br>Después de la asignación \$b = '5a version de PHP':<br>";
            echo "b = $b, tipo = " . gettype($b) . "<br><br>";

            // Asignamos a $c el resultado de $b*10 (esto intentará convertir $b a número)
            $c = $b * 10;
            // Mostramos el contenido de $c y su tipo
            echo "Después de la asignación \$c = \$b * 10:<br>";
            echo "c = $c, tipo = " . gettype($c) . "<br><br>";

            // Concatenamos $a con el valor de $b
            $a .= $b;
            // Mostramos el contenido de $a y $z[0] (que está referenciado a $a)
            echo "Después de la asignación \$a .= $a \$b = $b <br>";
            // Multiplicamos $b por $c
            $b *= $c;
            // Mostramos el contenido de $b y su tipo
            echo "Después de la asignación \$b *= \$ $c:<br>";
            echo "b = $b, tipo = " . gettype($b) . "<br><br>";

            // Asignamos un nuevo valor a $z[0], lo que también afecta a $a porque están referenciados
            $z[0] = "MySQL";
            // Mostramos el contenido de $z[0] y $a
            echo "Después de la asignación \$z[0] = <br>";
            print_r($z);
        ?>
    <h2>Ejercicio 4</h2>
        <?php
            // Definimos las variables como globales
                global $a;
                global $z;
                global $b;
                global $c;
                echo '$a ='.$a.'<br><br>';
                echo '$b = '.$b.'<br><br>';
                echo '$c = '.$c.'<br><br>';
                echo '$z = ';
                print_r($z);    
        ?>        
        <h3>Ejercicio 5</h3>
        <?php
            echo 'Impresión de variables después de cada asignación<br>';
            $a = "7 personas";
            echo $a.'<br>'; 
            $b = (integer) $a;
            echo $b.'<br>';
            $a = "9E3";
            echo $a.'<br>';
            $c = (double) $a;
            echo $c.'<br>';
            
            unset($a);
            unset($b);
            unset($c);
        ?></body>
        <h3>Ejercicio 6</h3>
            <?php
// Definimos las variables
                $a = "0";
                $b = "TRUE";
                $c = FALSE;
                $d = ($a OR $b);
                $e = ($a AND $c);
                $f = ($a XOR $b);

                // Mostramos los valores booleanos de las variables
                echo "Valores booleanos de las variables:<br>";
                echo "\$a: "; var_dump((bool)$a); echo "<br>";
                echo "\$b: "; var_dump((bool)$b); echo "<br>";
                echo "\$c: "; var_dump((bool)$c); echo "<br>";
                echo "\$d: "; var_dump((bool)$d); echo "<br>";
                echo "\$e: "; var_dump((bool)$e); echo "<br>";
                echo "\$f: "; var_dump((bool)$f); echo "<br><br>";
            ?>
        <h3>Ejercicio 7</h3>
        <?php
                // a. Determinar la versión de Apache y PHP
                echo "Versión de Apache y PHP:<br>";
                echo "PHP: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
                echo "Versión de PHP: " . phpversion() . "<br><br>";

                // b. Nombre del sistema operativo del servidor
                echo "Sistema operativo del servidor:<br>";
                echo PHP_OS . "<br><br>";

                // c. Idioma del navegador del cliente
                echo "Idioma del navegador (cliente):<br>";
                echo $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br><br>";
            ?>

</body>


</html>