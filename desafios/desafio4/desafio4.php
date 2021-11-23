<?php

require_once "contaPremium.php";
require_once "contaSimples.php";

$contaPremium = new ContaPremium("0002", "222333", 10, "Brasil", 1000);
$contaPremium->saldo = 2000;
$contaSimples = new ContaSimples("0002", "222333", 10, "Brasil");

//echo $contaSimples->exibirSaldo();
echo $contaPremium->exibirSaldo();