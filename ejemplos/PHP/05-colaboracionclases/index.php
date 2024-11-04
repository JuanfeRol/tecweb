<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once __DIR__.'/Pagina.php';

    $pag = new Pagina(
        "El rincón del programador",
        "El sotano del programador",
    );

    for ($i = 0; $i < 15; $i++)
    {
        $pag->insertarCuerpo("Prueba No".($i+1)." que debe aparecer en el cuerpo de la pagina");
    }
    
    $pag->graficar();
    ?>
</body>
</html>