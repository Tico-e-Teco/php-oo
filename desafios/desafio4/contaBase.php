<?php

abstract class ContaBase
{
    protected $agencia;
    protected $pais;
    protected $numero;
    protected $saldo; 

    public function __construct(string $agencia, string $numero, float $saldoInicial, string $pais)
    {
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->pais = $pais;
        $this->saldo = $saldoInicial;
    }

    // obterSaldo
    public function obterSaldo(): float{
        return $this->saldo;
    }

    // obterSaldo
    public final function obterTaxaChequeEspecial(): float{
        return 0.7;
    }

    // exbirSaldo
    public function exibirSaldo(): string{
        $cifrao = "R$";

        if($this->pais == "EUA"){
            $cifrao = "USD";
        }

        return "Saldo conta " . $this->numero . " é de " . $cifrao . " " . $this->obterSaldo() . PHP_EOL;
    }

    // depositar
    public abstract function depositar(float $valorSaque):bool;

    // sacar
    public abstract function sacar(float $valorSaque):bool;

    // transferir
    public abstract function transferir(float $valor, Conta $contaTransferencia):bool;
}
