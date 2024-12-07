<?php

/*

const, self, parent

# const

    Define uma constante dentro de uma classe. Constantes são valores que não podem 
    ser alterados após sua definição.

    ## Características:

    1. Não são precedidas por $
    2. São acessíveis diretamente pela classe ou pelo objeto usando ::

# self

    Refere-se à própria classe onde está sendo chamado.

    Usado para:

    1. Acessar constantes e métodos estáticos definidos na mesma classe.
    2. Não funciona com métodos sobrescritos em subclasses (diferente de static).

# parent

    Refere-se à classe-pai (superclasse) de uma classe atual.

    Usado para:

    1. Acessar métodos ou construtores da superclasse que foram sobrescritos na classe atual.

*/

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