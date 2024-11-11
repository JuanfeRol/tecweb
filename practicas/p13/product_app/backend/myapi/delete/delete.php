<?php
    namespace ACTIVIDADES\PRODUCTOS\DELETE;
    require_once __DIR__ . '/../DataBase.php';
    use ACTIVIDADES\PRODUCTOS\DataBase as DataBase;

    class delete extends DataBase{
        public function __construct($db) {
            parent::__construct($db);
        }

        public function delete($producto){
            $data = array(
                'status'  => 'error',
                'message' => 'La consulta falló'
            );
            // SE VERIFICA HABER RECIBIDO EL ID
            if( isset($producto['id']) ) {
                $id = $producto['id'];
                // SE REALIZA LA QUERY DE BÚSQUEDA Y AL MISMO TIEMPO SE VALIDA SI HUBO RESULTADOS
                $sql = "UPDATE productos SET eliminado=1 WHERE id = {$id}";
                if ( $this->conexion->query($sql) ) {
                    $data['status'] =  "success";
                    $data['message'] =  "Producto eliminado";
                } else {
                    $data['message'] = "ERROR: No se ejecuto $sql. " . mysqli_error($this->conexion);
                }
                $this->conexion->close();
            } 
            
            // SE HACE LA CONVERSIÓN DE ARRAY A JSON
            $this->data = json_encode($data, JSON_PRETTY_PRINT);
        }
        

    }

?>