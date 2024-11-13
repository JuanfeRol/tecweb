<?php

    class Menu{
        private $enlaces = array();
        private $titulos = array();

        public function cargar_opcion($link,$title){
            $this->enlaces[] = $link;
            $this->titulos[] = $title;

        }

        public function mostrar(){
            for($i=0; $i<count($this->enlaces); $i++){
                echo '<p><a href="'.$this->enlaces[$i].'">'.$this->titulos[$i].'</a></p>';
            }
            
            if ($i < count($this->enlaces) - 1){
                echo ' - ';
            }

        }

    }

?>