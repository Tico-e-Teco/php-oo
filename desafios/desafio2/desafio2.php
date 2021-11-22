<?php

require_once "aluno.php";

$aluno = new Aluno("Diego", "Rodrigues", [1.0, 4.5, 5.1, 8.3, 1.0]);

print_r("Caro aluno " 
            . $aluno->obterNomeCompleto() 
            . " Média (" . $aluno->obterMedia() . ") "             
            . $aluno->validarClassificacao()
            . PHP_EOL
        );
//var_dump($aluno);
