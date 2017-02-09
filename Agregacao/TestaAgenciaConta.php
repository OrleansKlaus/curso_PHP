<?php

/* 
 * Exercícios de agregação, associação e composição
 3 - Defina um vínculo entre os objetos que representam as agências e os 
 * objetos que representam os contas.

Conta
    numero
    saldo
    limite = 100
  Agencia agencia
 * 
 * 
4 - Teste o relacionamento entre contas e agências.

agencia
  numero  178

conta
  numero 123
  saldo 1000.0
  limite 500

conta -> agencia = agencia

imprimir os dados da agencia
 * 
 * // Para incluir outras classes
// require_once('Cliente.php' ); ou spl_autoload_register();
 */
require_once('Agencia.php' );
require_once('Conta.php' );

$agencia = new Agencia;
$agencia->numero = 100;
$agencia->nome = " Av Paulista  " ;

$conta = new Conta;
$conta ->nome = "Orleans Klaus";
$conta ->numero = 123;
$conta->saldo = 550;
$conta->limite = 1000.00;
$conta->dono = $agencia;

echo "Numero da agencia: $agencia->numero\n";
echo "Nome da agencia: {$conta->dono->nome}\n";
echo "Numero da conta: $conta->numero\n";
echo "Nome do Cliente: $conta->nome\n";
echo "Limite da conta: $conta->limite\n";
echo "Saldo: $conta->saldo" .PHP_EOL;