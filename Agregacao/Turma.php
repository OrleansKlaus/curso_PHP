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

