<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 2</title>
</head>
<body>
    <?php

    require_once __DIR__.'/Menu.php';


    $enlaces = new Menu();
    $enlaces->cargar_opcion('https://www.facebook.com','Facebook');
    $enlaces->cargar_opcion('https://www.x.com','Twitter');
    $enlaces->cargar_opcion('https://www.instagram.com','Instagram');

    $enlaces->mostrar();




    ?>
</body>
</html>