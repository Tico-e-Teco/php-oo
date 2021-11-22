<?php

class Aluno
{
    private $nome;
    private $sobrenome;
    private $notas;

    // XGH: Force array float
    public function __construct(string $nomeParam, string $sobrenomeParam, $notasParam)
    {
        $this->nome = $nomeParam;
        $this->sobrenome = $sobrenomeParam;
        $this->notas = $notasParam;
    }

    /**
     * Objetivo desse método é de calcular a média de notas
     */
    public function obterMedia()
    {
        // soma / pela quantidade
        $notasSomadas = array_sum($this->notas);
        return $notasSomadas / 5 . PHP_EOL;

    }

    public function obterNomeCompleto(){
        return $this->nome . " " . $this->sobrenome;
    }
}
