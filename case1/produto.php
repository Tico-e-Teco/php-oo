<?php
require_once "fabricante.php";

// objeto no PHP
class Produto
{
    // Atributos/propriedades (tipos de acesso)
    private $id; // public, protected, private
    private $nomeDoProduto;
    private $fabricante;

    // Comportamentos/ Métodos
    public function __construct($id = 0, $nome = "", $fabricante = null)
    {
        $this->id = $id;
        $this->nomeDoProduto = $nome;
        $this->fabricante = $fabricante;
    }

    // Getter
    public function getId()
    {
        return $this->id;
    }

    // Getter
    public function getFabricante()
    {
        return $this->fabricante;
    }

    // Setter
    public function setFabricante(Fabricante $fabricante)
    {
        $this->fabricante = $fabricante;
    }

    // Getter
    public function getNome()
    {
        return $this->nomeDoProduto;
    }

    // Setter
    public function setNome($nome)
    {
        $this->nomeDoProduto = $nome;
    }
}

// objeto JSON
// {
//     "id": 200,
//     "nomeDoProduto": "Meião",
//     "fabricante": {
//         "id": 1,
//         "nome": "Adidas"
//     }
// }