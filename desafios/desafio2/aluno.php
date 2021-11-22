<?php

class Aluno
{
    private $nome;
    private $sobrenome;
    private $notas;

    public function __construct(string $nomeParam, string $sobrenomeParam, $notasParam)
    {
        $this->nome = $nomeParam;
        $this->sobrenome = $sobrenomeParam;
        $this->notas = $notasParam;
    }

    public function obterMedia()
    {
        // soma / pela quantidade
        $notasSomadas = array_sum($this->notas);
        return $notasSomadas / 5;

    }

    public function obterNomeCompleto(){
        return $this->nome . " " . $this->sobrenome;
    }

    // Classificação de formação
    public function validarClassificacao(){
        $media = $this->obterMedia();
   
        if($media >= 0 && $media <= 4){
            return "REPROVADO";
        }
        else if($media >= 5 && $media <= 7){
            return "NA MÉDIA";
        }
        else if($media >= 8 && $media <= 9){
            return "EXCELENTE";
        }
        
        return "EXCELENTE";
    }
}
