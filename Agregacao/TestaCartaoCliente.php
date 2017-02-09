<?php

/* 
 * Exercícios de agregação, associação e composição
 1 - Defina um vínculo entre os objetos que representam os clientes e os objetos que representam os cartões de crédito. Para isso, você deve alterar a classe CartaoDeCredito.

CartaoDeCredito
    numero
    dataDeValidade
  Cliente cliente
2 - Teste o relacionamento entre clientes e cartões de crédito.

nome Rafael Cosentino
codigo 123

numero 111111
dataDeValidade 12/12/18

cartao -> cliente = cliente

imprimir os dados do cliente do cartao 
 * 
 * // Para incluir outras classes
// require_once('Cliente.php' ); ou spl_autoload_register();
 */
require_once('Cliente.php' );
require_once('Cartao.php' );

$cliente1 = new Cliente;
$cliente1->nome = " Orleans Klaus";
$cliente1->codigo = 1;

$cartao1 = new CartaoDeCredito;
$cartao1->numero = "5536 3602 2085 4707";
$cartao1->dataDeValidade = "03/2024";
$cartao1->dono = $cliente1;

echo "Numero do Cartao de Credito: $cartao1->numero\n";
echo "Data de Validade do Cartao: $cartao1->dataDeValidade\n";
echo "Nome do Cliente: {$cartao1->dono->nome}\n";
echo "Codigo do Cliente: $cliente1->codigo" .PHP_EOL;