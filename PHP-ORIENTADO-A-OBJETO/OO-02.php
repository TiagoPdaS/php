<?php
 class Web
 {
    public $name = 'tiago';
    public static $contagem = 0;

    public static function incrementar(){
        self::$contagem++;
    }
    }
 
     //instanciar uma classe
    new web();
    web::incrementar();
    web::incrementar();
    echo web::$contagem;

    
?>