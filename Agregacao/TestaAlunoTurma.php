<?php

/* 
 * Exercícios de agregação, associação e composição
5 - Defina um vínculo entre os alunos e as turmas, criando na classe Aluno
 *  um atributo do tipo Turma.

Aluno
    nome
    rg
    dataNascimento
  Turma turma
6 - Teste o relacionamento entre os alunos e as turmas, criando um objeto 
 * de cada classe e alterando os valores dos atributos desses objetos. 
 * Exiba na Console os valores que estão nos atributos da turma através do aluno.

turma
  periodo Manha
  serie = 5
  sigla B
  tipoDeEnsino Fundamental

aluno
  nome Rafael Cosentino
  dataNascimento 30/10/1984
  rg 11111111

aluno -> turma = turma

imprimir os dados da turma do aluno
 * 
 * // Para incluir outras classes
// require_once('Cliente.php' ); ou spl_autoload_register();
 */
require_once('Turma.php' );
require_once('Aluno.php' );

$turma1 = new Turma;
$turma1->periodo = "Tarde";
$turma1->serie = 8 ;
$turma1->sigla = "A" ;
$turma1->tipoDeEnsino = "Fundamental" ;

$aluno = new Aluno;
$aluno ->nome = "Marcelo Martins";
$aluno->rg = "33333333-3";
$aluno->dataNascimento = "02/04/1985" ;
$aluno->dono = $turma1;

echo "Periodo: $turma1->periodo\n" ;
echo "Serie: $turma1->serie\n";
echo "Sigla: $turma1->sigla\n";
echo "Tipo de Ensino: $turma1->tipoDeEnsino\n";
echo "Tipo de Ensino: {$aluno->dono->tipoDeEnsino}\n";
echo "Nome do Aluno: $aluno->nome\n";
echo "RG do aluno: $aluno->rg\n";
echo "Data de Nascimento do aluno: $aluno->dataNascimento\n" .PHP_EOL;