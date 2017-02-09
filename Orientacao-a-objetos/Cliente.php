<?php

/* 
 * 1 - Implemente uma classe para definir os objetos que representarão os 
 * clientes de um banco. Essa classe deve possuir dois atributos: um para 
 * armazenar os nomes e outro para armazenar os códigos dos clientes.
 * 
 * 2 - Faça um teste criando dois objetos da classe Cliente. 
 * Altere e exiba no Console os valores armazenados nos atributos desses objetos.
 */

class Cliente{
    
    public $nome;
    public $codigo;
    
}

$cliente1 = new Cliente;
$cliente1->nome = " Orleans ";
$cliente1->codigo = 1;

echo "Nome do cliente: $cliente1->nome\n";
echo "Codigo: $cliente1->codigo" .PHP_EOL;

$cliente2 = new Cliente;
$cliente2->nome = " Rafael Cosentino ";
$cliente2->codigo = 2;

echo "Nome do cliente: $cliente2->nome\n";
echo "Codigo: $cliente2->codigo" .PHP_EOL;

$cliente3 = new Cliente;
$cliente3->nome = " Jonas Hirata ";
$cliente3->codigo = 3;

echo "Nome do cliente: $cliente3->nome\n";
echo "Codigo: $cliente3->codigo" .PHP_EOL;