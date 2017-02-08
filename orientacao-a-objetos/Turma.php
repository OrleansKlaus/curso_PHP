<?php

/* 
13 - Em uma escola, os alunos precisam ser divididos por turmas, que devem ser
 *  representadas dentro da aplicação. Crie uma classe chamada Turma que 
 * contenha quatro atributos: o primeiro para o período, o segundo para 
 * definir a série, o terceiro para sigla e o quarto para o tipo de ensino.

Turma
    periodo
    serie
    sigla
    tipoDeEnsino
 * 
14 - Crie dois objetos da classe Turma. Altere os valores dos atributos desses
 *  objetos e exiba no Console os valores armazenados nesses atributos.

periodo Tarde
serie 8
sigla A
tipoDeEnsino Fundamental

periodo Manha
serie 5
sigla B
tipoDeEnsino Fundamental
 */

// Para incluir outras classes
// require_once('Cliente.php' ); ou spl_autoload_register();

class Turma{
    
    public $periodo;
    public $serie;
    public $sigla;
    public $tipoDeEnsino;
    
}

$turma2 = new Turma;
$turma2->periodo = "Manha";
$turma2->serie = 5 ;
$turma2->sigla = "B" ;
$turma2->tipoDeEnsino = "Fundamental" ;

echo "Periodo: $turma2->periodo\n" ;
echo "Serie: $turma2->serie\n";
echo "Sigla: $turma2->sigla\n";
echo "Tipo de Ensino: $turma2->tipoDeEnsino\n".PHP_EOL;

$turma1 = new Turma;
$turma1->periodo = "Tarde";
$turma1->serie = 8 ;
$turma1->sigla = "A" ;
$turma1->tipoDeEnsino = "Fundamental" ;

echo "Periodo: $turma1->periodo\n" ;
echo "Serie: $turma1->serie\n";
echo "Sigla: $turma1->sigla\n";
echo "Tipo de Ensino: $turma1->tipoDeEnsino\n".PHP_EOL;
