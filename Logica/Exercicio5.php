<?php

/* 
 * Crie um programa que exiba no Console um triângulo de *
 * 
 * *
**
***
****
*****
******
 * 
 * Extra:
 * Crie um programa que exiba no Console vários triângulos de *

Os números de Fibonacci são uma sequência de números definida recursivamente. O primeiro elemento da sequência é 0 e o segundo é 1. Os outros elementos são calculados somando os dois antecessores.

0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233
 * 
 * 
 */

$linha = "*";
for ($i=0; $i <=5; $i++){
    echo "$linha" .PHP_EOL;
    $linha .= "*";
} 