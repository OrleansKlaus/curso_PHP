<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Conta.php';

Conta::$contador = 0;
echo "Contador inicial: " . Conta::$contador .PHP_EOL;

$x = new Conta;
$x->numero = 11;
$x->saldo = 600;

$y = new Conta;
$y->numero = 12;
$y->saldo = 700;

echo "Contador final: " . Conta::$contador .PHP_EOL;

Conta::zeraContador();

echo " Contador após zeraContador: " .Conta::$contador .PHP_EOL;
