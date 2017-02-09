<?php

/* 
1 - Acrescente alguns métodos na classe Conta para realizar as operações de 
 * deposito, saque, impressão de extrato e consulta do saldo disponível.

Conta
    numero
    saldo
    limite 100
    Agencia agencia


deposita  valor
saca  valor

imprimeExtrato
consultaSaldoDisponivel
 */

class Conta{
  public $numero;
  public $saldo;

  public function deposita($valor){
    $this->saldo += $valor; //this acessa ao atributo 'saldo'
  }

  public function saca($valor){
      
        if($valor <= $this->saldo){
            $this->saldo -= $valor;
            return true;
        }else{
            return false;
        }
  }
}


