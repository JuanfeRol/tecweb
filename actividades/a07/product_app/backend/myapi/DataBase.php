<?php

namespace ACTIVIDADES\PRODUCTOS;

abstract class DataBase
{
    protected $conexion;

    public function __construct($db,$user='root',$password='pochita20'){
        $this -> conexion = @mysqli_connect(
            'localhost',
            $user,
            $password,
            $db
        );
    }
}

?>