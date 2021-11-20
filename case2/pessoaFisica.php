<?php

require_once "pessoa.php";

class PessoaFisica extends Pessoa
{
    #region | propriedades 
    private $nome;
    private $sobreNome;
    #endregion
    
    #region | comportamentos
    public function __construct($id, $documento)
    {    
        parent::__construct($id);
        $this->documento = $documento;
    }

    protected function getNomeCompleto()
    {
        return $this->nome . " " . $this->sobreNome;  
    }

    public function getSaudacao():string{
        return "Ola pessoa física";
    }
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