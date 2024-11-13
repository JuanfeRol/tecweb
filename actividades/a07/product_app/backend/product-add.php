<?php
    use ACTIVIDADES\PRODUCTOS\Products as Products;

    require_once __DIR__ . '/myapi/Products.php';    
    
    $products = new Products('marketzone');
    //leer json y convertirlo a objeto php
    $json = file_get_contents('php://input');
    $producto = json_decode($json);
    $products->add($producto);
    echo $products->getData();

?>