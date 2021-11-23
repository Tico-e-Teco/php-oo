<?php

require_once "conta.php";

$conta1 = new Conta("0001", "123456");
$conta1->depositar(100);

$conta2 = new Conta("0001", "444555", 5);

// $conta3 = new Conta("0001", "444555", "EUA", 10);
// print_r($conta3->exibirSaldo());

print_r($conta1->exibirSaldo());
print_r($conta2->exibirSaldo());

$transferido = $conta1->transferir(20, $conta2);

if($transferido){
    echo "Transferencia realizada com sucesso." . PHP_EOL;
} else {
    echo "Saldo insuficiente." . PHP_EOL;
}

print_r($conta1->exibirSaldo());
print_r($conta2->exibirSaldo());


// print_r("Saldo atual: " . $conta1->exibirSaldo() . PHP_EOL);
// $conta1->depositar(100);
// print_r("Saldo atual: " . $conta1->exibirSaldo() . PHP_EOL);
// $conta1->sacar(23);
// print_r("Saldo atual: " . $conta1->exibirSaldo() . PHP_EOL);


