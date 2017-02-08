<?php

/* 
 * Faça um programa que percorra todos os números de 1 até 100. 
 * Para os números ímpares, deve ser exibido um * e para os números pares **
 */
for($i = 1; $i <= 10; $i++){
    if ($i % 2 == 0){
        echo "$i é par [**]" .PHP_EOL;
    }else{
        echo "$i é impar [*]" .PHP_EOL;
    }
}

$i = 0;
for($i = 1; $i <= 10; $i++){
    if ($i % 2 == 0){
        echo "$i é par [**]" .PHP_EOL;
    }else{
        echo "$i é impar [*]" .PHP_EOL;
    }
}