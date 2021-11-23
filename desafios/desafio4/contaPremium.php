<?php

require_once "contaBase.php";

final class ContaPremium extends ContaBase
{

    private $limite;

    public function __construct(string $agencia, string $numero, float $saldoInicial, string $pais, float $limite)
    {
        parent::__construct($agencia, $numero, $saldoInicial, $pais);
        $this->limite = $limite;
    }

    // obterSaldo
    public function obterSaldo(): float{
        return  $this->saldo + $this->limite ;
    }

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
