<?php
 // super
 class Livros_ {
   // 1º atributo (private)
      // private $titulo;
      // private $anoEd;
      // private $editora;
      // private $qtdPag;
      // protected $personagem; // array
      // private $isbn;
      // private $valor;
      // private $capa;
      private $qtdFaturado;
      private $dscItem;
      private $numItem;
      private $preco;
      
      
      public function __construct(){

      }

     public function __set($atributo, $value){
       $this->$atributo = $value;
     }
     public function __get($atributo){
        return $this->$atributo;
     }
     public function total(){
          return  $this->$total =$preco * $qtdFaturado;
     }
     // 4º três objeto/ instância  

 }


?>