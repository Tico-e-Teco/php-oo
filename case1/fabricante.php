<?php

class Fabricante {
    private $id; 
    private $nome;

    // Comportamentos/ Métodos
    public function __set($atrib, $value){
        $this->$atrib = $value;
    }

    public function __get($atrib){
        return $this->$atrib;
    }

}