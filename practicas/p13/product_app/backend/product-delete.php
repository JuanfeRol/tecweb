<?php
    use API\Delete\Delete;

    require_once __DIR__ . '/vendor/autoload.php';

    $products = new Delete('marketzone');
    $products->delete($_POST);
    echo $products->getData();

?>