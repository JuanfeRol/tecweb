<?php

class Operacion{
    protected $valor1;
    protected $valor2;
    protected $resultados;

    public function __construct($v1, $v2){
        $this->valor1 = $v1;
        $this->valor2 = $v2;
        $this->resultados = 0;
    }

    public function setValor1($v1){
        $this->valor1 = $v1;
    }

    public function setValor2($v2){
        $this->valor2 = $v2;
    }

     public function getResultado(){
        return $this->resultado;
     }
}

class Suma extends Operacion{
    public function operar(){
        $this->resultado = $this->valor1 + $this->valor2;
    }
}


class Resta extends Operacion{
    public function operar(){
        $this->resultado = $this->valor1 - $this->valor2;
    }
}

?>