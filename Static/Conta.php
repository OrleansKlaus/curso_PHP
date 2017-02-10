<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Conta{
    
    public $numero; //  Atributo do objeto
    public $saldo;  //  Atributo do objeto
    public static $contador;  //  Atributo da Classe
    // static atribui o atributo para a Classe
    
    //$this só pode ser acessado por metodos de Objetos e Nunca com Static
    
    public function __construct() {
        self::$contador++;  // Acessar atributo Static
    }
    
    public static function zeraContador() { // static - Metodo da Classe
        
        // Envia Email
        
        self::$contador = 0;
        
    }
    
}