<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$vetor = array(2,3,4,5);

$multiplicacao = 1;

foreach ($vetor as $numero){
    $multiplicacao *= $numero;
}

$produto = array();

for($i = 0; $i < count($vetor); $i++)
{
    $produto[$i] = $multiplicacao / $vetor[$i];
}

print_r($produto);