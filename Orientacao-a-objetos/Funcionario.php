<?php

/* 
11 - Em uma escola, além dos alunos temos os funcionários, que também precisam ser representados em nossa aplicação. Então crie uma classe chamada Funcionario que contenha dois atributos: o primeiro para o nome e o segundo para o salário dos funcionários.

Funcionario
    nome
    salario
12 - Crie dois objetos da classe Funcionario. Altere os valores dos atributos desses objetos e exiba no Console os valores armazenados nesses atributos.

nome  Marcelo Martins
salario  1800.57

nome Rafael Cosentino
salario 2000.88
 */

class funcionarios{
    
    public $salario;
    public $nome;
    
}

$funcionario1 = new funcionarios;
$funcionario1->salario = 1800.57;
$funcionario1->nome = " Marcelo Martins  " ;

echo "Nome do funcionario: $funcionario1->nome\n" ;
echo "Salario: $funcionario1->salario\n".PHP_EOL;

$funcionario2 = new funcionarios;
$funcionario2->salario = 2000.88;
$funcionario2->nome = " Rafael Cosentino  " ;

echo "Nome do funcionario: $funcionario2->nome\n" ;
echo "Salario: $funcionario2->salario\n".PHP_EOL;