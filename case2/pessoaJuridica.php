<?php

require_once "pessoa.php";

class PessoaJuridica extends Pessoa
{
    private $representanteLegal;
    private $nomeFantasia;

    public function __construct($id, $documento)
    {    
        parent::__construct($id);
        $this->documento = $documento;
    }

    public function getSaudacao():string{
        return "Ola pessoa juridica";
    }
}