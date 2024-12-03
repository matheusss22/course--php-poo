<?php

# Objetos são instâncias de uma classe que os define.

class Pessoa {
    public $nome;
    public $idade;

    public function falar() {
        echo $this->nome." de ".$this->idade." falou!";
    }
}


$matheus = new Pessoa();
// var_dump($matheus);

$matheus->nome = "Matheus";
$matheus->idade = 22;
$matheus->falar();
