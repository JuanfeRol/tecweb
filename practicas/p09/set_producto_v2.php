<?php
$nombre = 'nombre_producto';
$marca  = 'marca_producto';
$modelo = 'modelo_producto';
$precio = 1.0;
$detalles = 'detalles_producto';
$unidades = 1;
$imagen   = 'img/imagen.png';

/** SE CREA EL OBJETO DE CONEXION */
@$link = new mysqli('localhost', 'root', 'pochita20', 'marketzone');	

/** comprobar la conexión */
if ($link->connect_errno) 
{
    die('Falló la conexión: '.$link->connect_error.'<br/>');
    /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
}

$nombre=$_POST['name'];
$marca=$_POST['brand'];
$modelo=$_POST['model'];
$precio=$_POST['price'];
$detalles=$_POST['details'];
$unidades=$_POST['units'];
$flag = 0;

// Validar que ni el nombre, modelo y marca existan en la base de datos
$validacion = "SELECT * FROM productos WHERE nombre = '{$nombre}' AND modelo = '{$modelo}' AND marca = '{$marca}'";
$result = $link->query($validacion);

if ($result->num_rows > 0) {
    echo 'El nombre, modelo y marca ya existen en la base de datos';
    exit;
    $flag = 1;
}

if ($flag == 0) {
    $sql = "INSERT INTO productos VALUES (null, '{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$imagen}')";
    if ( $link->query($sql) ) 
    {
        echo 'Producto insertado con ID: '.$link->insert_id;
    }
    else
    {
        echo 'El Producto no pudo ser insertado =(';
    }
}
?>