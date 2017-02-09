<?php

/* 
 * 7 - As contas do banco possuem número, saldo e limite. Crie uma classe 
 * chamada Conta para definir os objetos que representarão as contas do banco.
 * 
 * 8 - Faça um teste que exiba no Console os valores armazenados nos
 *  atributos de um objeto da classe Conta logo após a sua criação.
 */

class Conta{
    
    public $numero;
    public $saldo;
    public $limite;
    
}

$conta = new Conta;
$conta ->numero = 123;
$conta->saldo = 550;
$conta->limite = 1000.00;

echo "Numero da conta: $conta->numero\n";
echo "Limite da conta: $conta->limite\n";
echo "Saldo: $conta->saldo" .PHP_EOL;
