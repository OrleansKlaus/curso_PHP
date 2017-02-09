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
