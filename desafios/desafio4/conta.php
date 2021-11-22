<?php

abstract class Conta
{
    private $agencia;
    private $numero;
    private $saldo; 

    public function __construct()
    {
        
    }

    // obterSaldo
    public abstract function obterSaldo():float;
    
    // transferir
    public abstract function transferir(float $valor, Conta $contaTransferencia):bool;
}
