<?php

# Referência e clonagem de objetos

class Pessoa {
    public $idade;

    # Método mágico - Executa ações quando um clone é instânciado
    public function __clone() {
        echo "Clonando um objeto"."<br>";
    }
}



$pessoa = new Pessoa();
$pessoa->idade = 25;

// $pessoa2 = $pessoa;      # pessoa2 é uma referência de pessoa
$pessoa2 = clone $pessoa;   # pessoa2 agora é um clone de pessoa
$pessoa2->idade = 35;

echo $pessoa->idade."<br>";
echo $pessoa2->idade;