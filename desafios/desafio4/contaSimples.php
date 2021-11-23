<?php

require_once "contaBase.php";

final class ContaSimples extends ContaBase
{
    // depositar
    public function depositar(float $valorSaque): bool{
        return true;
    }

    // sacar
    public function sacar(float $valorSaque): bool{
        return true;
    }

    // transferir
    public function transferir(float $valor, Conta $contaTransferencia): bool{
        return true;
    }
}
