<?php

require_once "pessoaFisica.php";

final class PessoaFisicaEspecial extends PessoaFisica
{
    #region | propriedades 
    private $limite;
    #endregion
    
    #region | métodos mágicos
    public function __set($atrib, $value){
        $this->$atrib = $value;
    }

    public function __get($atrib){
        return $this->$atrib;
    }
    #endregion
}