<?php

/* 
 * Faça um programa que percorra todos os números de 1 até 100. 
 * Para os números múltiplos de 4, exiba a palavra PIN, e para os outros, 
 * exiba o próprio número.
 */

for ($i=1; $i <=100; $i++){
    if ($i % 4 == 0){
        echo "Pin" .PHP_EOL;
    }else{
        echo "$i" .PHP_EOL;
    }
}