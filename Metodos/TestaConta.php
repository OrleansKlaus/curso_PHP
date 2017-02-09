<?php

/* 
 * Exercícios de metodos
2 - Teste os métodos da classe Conta

conta
        deposita 1000
        imprimeExtrato

        saca 100
        imprimeExtrato

        consultaSaldoDisponivel
        imprime saldoDisponivel
 * 
 * // Para incluir outras classes
// require_once('Cliente.php' ); ou spl_autoload_register();
 */


//null no PHP é falso
require_once 'Conta.php';

$conta = new Conta;
$conta->numero = 13;

//chama metodo "deposita"
$conta->deposita(700);

echo "Saldo: $conta->saldo".PHP_EOL;

$resultado = $conta->saca(800);

if($resultado){
    echo "Saque efetuado com sucesso".PHP_EOL;
    echo "Saldo após saque: $conta->saldo".PHP_EOL;
}else {
    echo "Saldo insuficiente".PHP_EOL;
    echo "Saque não realizado! Saldo atual: $conta->saldo".PHP_EOL;
}




