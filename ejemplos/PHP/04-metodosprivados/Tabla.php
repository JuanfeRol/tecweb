<?php

class Tabla{
    private $matriz = array();
    private $numFilas = 0;
    private $numColumnas = 0;
    private $estilo;
    
    public function __construct($rows, $cols, $style){
        $this -> numFilas = $rows;
        $this -> numColumnas = $cols;
        $this->estilo = $style;
    }

    public function cargar($row, $col, $val){
       $this->matriz[$row][$col] = $val;
    }

    private function inicioTabla(){
        echo '<table style="'.$this->estilo.'">';
    }

    private function inicioFila(){
        echo '<tr>';
    }

    private function mostrarDato($row, $col){
        echo '<td style="'.$this->estilo.'">'.$this->matriz[$row][$col].'</td>';
    }

    private function finFila(){
        echo '</tr>';
    }

    private function finTabla(){
        echo '</table>';
    }

    public function graficar(){
        this->inicioTabla();
        for($i=1; $i<=$this->numFilas; $i++){
            $this->inicioFila();
            for($j=1; $j<=$this->numColumnas; $j++){
                $this->mostrarDato($i, $j);
            }
            $this->finFila();
        }
        $this->finTabla();
    }
}

?>