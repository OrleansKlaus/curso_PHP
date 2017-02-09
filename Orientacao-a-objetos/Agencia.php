<?php

/* 
 * 5 - As agências do banco possuem número. Crie uma classe chamada Agencia 
 * para definir os objetos que representarão as agências do banco.
 * 
 * 6 - Faça um teste criando dois objetos da classe Agencia. Altere e exiba 
 * no Console os valores armazenados nos atributos desses objetos.
 */

class Agencia{
    
    public $numero;
    public $nome;
    
}

$agencia = new Agencia;
$agencia->numero = 100;
$agencia->nome = " Av Paulista  " ;

echo "Numero da agencia: $agencia->numero\n";
echo "Nome da agencia: $agencia->nome" .PHP_EOL;

$agencia1 = new Agencia;
$agencia1->numero = 200;
$agencia1->nome = " Av Faria Lima  " ;

echo "Numero da agencia: $agencia1->numero\n";
echo "Nome da agencia: $agencia1->nome" .PHP_EOL;