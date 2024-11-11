    <?php
        include_once __DIR__.'/database.php';

        // SE CREA EL ARREGLO QUE SE VA A DEVOLVER EN FORMA DE JSON
        $data = array();
        
        // SE VERIFICA HABER RECIBIDO EL ID
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            // SE REALIZA LA QUERY DE BÚSQUEDA Y AL MISMO TIEMPO SE VALIDA SI HUBO RESULTADOS
            if ($result = $conexion->query("SELECT * FROM productos WHERE id = '{$id}'")) {
                // SE OBTIENEN LOS RESULTADOS
                $row = $result->fetch_array(MYSQLI_ASSOC);

                if (!is_null($row)) {
                    // SE CODIFICAN A UTF-8 LOS DATOS Y SE MAPEAN AL ARREGLO DE RESPUESTA
                    foreach ($row as $key => $value) {
                        $data[$key] = utf8_encode($value);
                    }
                }
                $result->free();
            } else {
                die('Query Error: ' . mysqli_error($conexion));
            }
            $conexion->close();
        }  elseif (isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];  // Cambio de $id a $nombre, ya que es lo que estás buscando
            $data = array();  // Reinicializamos la variable para asegurar que esté vacía
            // SE REALIZA LA QUERY DE BÚSQUEDA Y AL MISMO TIEMPO SE VALIDA SI HUBO RESULTADOS
            if ($result = $conexion->query("SELECT * FROM productos WHERE nombre LIKE '%{$nombre}%'")) {
                // SE OBTIENEN LOS RESULTADOS Y SE ITERAN
                while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    $producto = array();
                    foreach ($row as $key => $value) {
                        $producto[$key] = utf8_encode($value);
                    }
                    $data[] = $producto;  // Añadimos cada producto al array
                }
                $result->free();
            } else {
                die('Query Error: ' . mysqli_error($conexion));
            }
            $conexion->close();
        }
        

        // SE HACE LA CONVERSIÓN DE ARRAY A JSON
        echo json_encode($data, JSON_PRETTY_PRINT);
    ?>
