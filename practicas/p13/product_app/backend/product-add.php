<?php

    require_once __DIR__ . '/vendor/autoload.php';
    use API\Create\Create;
    
    $products = new Create('marketzone');
    //leer json y convertirlo a objeto php
    $json = file_get_contents('php://input');
    $producto = json_decode($json);
    $products->add($producto);
    echo $products->getData();

?>