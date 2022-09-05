<?php
class empregado {
    private $nome;
    private $sobrenome;
    private $salario;

    public function __construct(){

    }
    public function __set($value, $atributo){
        return $this->$atributo = $value;
    }
    public function __get($value){
        return $this->$value;
    }

    public function salAnual($salAnual){
        return $this->$salario * 12;
    }
}
?>