<?php

require_once "pessoaFisica.php";

$pf = new PessoaFisica(10, "555544");
$pf->nome = "Diego";
$pf->sobreNome = "Rodrigues";
//$pf->documento = "34235234"; // é protegida

// print_r($pf);

echo $pf->getSaudacao();