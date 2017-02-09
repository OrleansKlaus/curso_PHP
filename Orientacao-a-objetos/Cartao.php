<?php

/* 
 * 3 - Os bancos oferecem aos clientes a possibilidade de obter um 
 * cartão de crédito que pode ser utilizados para fazer compras. 
 * Um cartão de crédito possui um número e uma data de validade. 
 * Crie uma classe chamada CartaoDeCredito para modelar os objetos que 
 * representarão os cartões de crédito.
 * 
 * 4 - Faça um teste criando dois objetos da classe CartaoDeCredito. 
 * Altere e exiba no Console os valores armazenados nos atributos desses objetos.
 * 
 * 
 * // Para incluir outras classes
// require_once('Cliente.php' ); ou spl_autoload_register();
 */
spl_autoload_register();

class CartaoDeCredito{
    
    public $numero;
    public $dataDeValidade;
}

$cartao1 = new CartaoDeCredito;
$cartao1->numero = "5536 3602 2085 4707";
$cartao1->dataDeValidade = "03/2024";
$cartao1->$cliente = Cliente.$cliente;

echo "Numero do Cartao de Credito: $cartao1->numero\n";
echo "Validade: $cartao1->dataDeValidade" .PHP_EOL;

$cartao2 = new CartaoDeCredito;
$cartao2->numero = "1234 1234 1234 1234";
$cartao2->dataDeValidade = "08/2020";

echo "Numero do Cartao de Credito: $cartao2->numero\n";
echo "Validade: $cartao2->dataDeValidade" .PHP_EOL;