<?php

# Const, self, parent

# self -> const no escopo da classe que pertence
# parent -> const no escopo da classe que ele herdou

class Pessoa {
    const nome = "Matheus";

    public function exibirNome() {
        echo self::nome;
    }
}

class Matheus extends Pessoa {
    const nome = "Sousa";

    public function exibirNome() {
        echo self::nome."<br>";
        echo parent::nome."<br>";
    }
}



$matheus = new Matheus();
$matheus->exibirNome();