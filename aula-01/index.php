<?php

# Objetos são instâncias de uma classe que os define.

class Pessoa {

    # Atributos
    public $nome;
    public $idade;

    # Método
    public function falar() {
        echo $this->nome." de ".$this->idade." anos falou!";
    }
}



$matheus = new Pessoa();
$matheus->nome = "Matheus";
$matheus->idade = 22;
$matheus->falar();

echo "<pre>";
print_r($matheus);