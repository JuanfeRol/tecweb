<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once __DIR__.'/Cabecera.php';

    $cab1 = new Cabecera('El rincon del programador');
    $cab1->graficar();

    echo'<br>';

    $cab2 = new Cabecera('El rincon del programador','left');
    $cab2->graficar();

    echo'<br>';

    $cab3 = new Cabecera('El rincon del programador','rigth', '#FF0000');
    $cab3->graficar();

    echo'<br>';

    $cab4 = new Cabecera('El rincon del programador','right', '#FF0000','#C876FF');
    $cab4->graficar();
    ?>
</body>
</html>
