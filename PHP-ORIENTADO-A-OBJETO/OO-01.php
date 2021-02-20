<?php
 class Web
 {
     //metodos e atributos.

     public $nome = 'joao';

     //metodo construtor.
     /*function __construct($nome)
     {
         echo $nome;
     }
     */

     public function printNome(){
         return 'Tiago';
     }   
     }
     
     //instanciar uma classe
     $web = new web();

     //echo $web->printNome();

     echo $web->nome;
?>