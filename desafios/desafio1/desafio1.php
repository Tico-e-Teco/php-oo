<?php

require_once "aluno.php";

$aluno = new Aluno("Diego", "Rodrigues", [5.0, 4.5, 5.1, 8.3, 7.0]);

print_r("Média do aluno " . $aluno->obterNomeCompleto() . " " . $aluno->obterMedia());
//var_dump($aluno);
