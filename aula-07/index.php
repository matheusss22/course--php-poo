<?php

# Const, self, parent

class Pessoa {
    const nome = "Matheus";

    public function exibitNome() {
        echo self::nome;
    }
}

class Matheus extends Pessoa {
    const nome = "Sousa";

    public function exibitNome() {
        echo self::nome."<br>";
        echo parent::nome."<br>";
    }
}

$matheus = new Matheus();
$matheus->exibitNome();