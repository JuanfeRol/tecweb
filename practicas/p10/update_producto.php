<?php

/** SE CREA EL OBJETO DE CONEXION */
@$link = new mysqli('localhost', 'root', 'pochita20', 'marketzone');	

/** comprobar la conexión */
if ($link->connect_errno) 
{
    die('Falló la conexión: '.$link->connect_error.'<br/>');
    /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
}
$id = $_POST['id'];
$nombre=$_POST['name'];
$marca=$_POST['brand'];
$modelo=$_POST['model'];
$precio=$_POST['price'];
$detalles=$_POST['details'];
$unidades=$_POST['units'];
$imagen=$_POST['image'];
$eliminado = 0;

//ejecutar la actualizacion 
$sql = "UPDATE productos SET nombre = '$nombre', marca = '$marca', modelo = '$modelo', precio = '$precio', detalles = '$detalles', unidades = '$unidades', imagen = '$imagen' WHERE id = $id";

if ( $link->query($sql) ) 
{
    echo 'Producto actualizado con ID: '.$id;
    echo '<br>';
    echo 'Nombre: '.$nombre;
    echo '<br>';
    echo 'Marca: '.$marca;
    echo '<br>';
    echo 'Modelo: '.$modelo;
    echo '<br>';
    echo 'Precio: '.$precio;
    echo '<br>';
    echo 'Detalles: '.$detalles;
    echo '<br>';
    echo 'Imagen: '.$imagen;
}
else
{
    echo 'El Producto no pudo ser actualizado :(';
}

//cierra la conexión
$link->close();

//Texto con vinculo para dirigir a la pagina de productos
echo '<br>';
echo '<a href="get_productos_vigentes_v2.php">Regresar a la lista de productos</a>';



?>