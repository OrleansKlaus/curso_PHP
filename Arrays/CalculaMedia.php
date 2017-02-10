<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// php CalculaMedia.php 1 2 3 4 5
// Media é: 3

// $argv armazena informacoes digitadas pelo usuario

$soma = 0;

for($i = 0; $i < count($argv); $i++)
{
    $soma += $argv[$i];
}

echo "Média: ($soma/ (count($argv)-1))" .php_eol;