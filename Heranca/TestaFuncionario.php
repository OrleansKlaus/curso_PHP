<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Secretario.php';
require_once 'Gerente.php';

$gerente = new Gerente;
$gerente->nome = "Joelma";
$gerente->salario = 12000;
$gerente->senha = 1234;

$secretario = new Secretario;
$secretario->nome = "Joao";
$secretario->salario = 2000;
$secretario->ramal = 6241;
