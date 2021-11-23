<?php

class Conta {

    #region | Propriedades/Caracteristicas
    private $agencia;
    private $numero;
    private $pais; 
    private $saldo;
    private $limite;
    #endregion

    #region | Comportamentos
    public function __construct(string $agencia, string $numero, float $saldoInicial = 0, float $limite = 0, string $pais = "Brasil")
    {
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->pais = $pais;
        $this->saldo = $saldoInicial;
        $this->limite = $limite;
    }

    // ver o saldo SOpen Closed Principle LID
    private function obterSaldo():float
    {
        return $this->saldo + $this->limite;
    }

    public function exibirSaldo(){

        $cifrao = "R$";

        if($this->pais == "EUA"){
            $cifrao = "USD";
        }

        return "Saldo conta " . $this->numero . " é de " . $cifrao . " " . $this->obterSaldo() . PHP_EOL;
    }

    // transferir valor
    public function transferir(float $valorTransferencia, Conta $contaTransferencia){
        $saldo = $this->obterSaldo();

        if($saldo >= $valorTransferencia)
        {
            // 1. creditar na outra destino
            $contaTransferencia->depositar($valorTransferencia);
            // 2. debitar da conta atual 
            $this->sacar($valorTransferencia);

            return true;
        }

        return false;
    }

    public function depositar(float $valorDeposito){
        $this->saldo += $valorDeposito;
    }

    public function sacar(float $valorSaque){
        $this->saldo -= $valorSaque;
    }
    #endregion

}