<?php
require_once __DIR__ . '/Cuerpo.php';
require_once __DIR__ . '/Cabecera.php';
require_once __DIR__ . '/Pie.php';

class Pagina{
    private $cabecera;
    private $cuerpo;
    private $pie;

    public function __construct($tex1, $text2){
        $this->cabecera = new Cabecera($tex1);
        $this->cuerpo = new Cuerpo();
        $this->pie = new Pie($text2);
    }

    public function insertarCuerpo($texto){
        $this->cuerpo->insertar_Parrafo($texto);
    }    

    public function graficar(){
        $this->cabecera->graficar();
        $this->cuerpo->graficar();
        $this->pie->graficar();
    }
}

?>