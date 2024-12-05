<?php

# Métodos mágicos __set(), __get(), __toString(), __invoke()

class Pessoa {
    private $dados = array();

    # __set Possibilita alterar o atributo private do objeto fora do escopo da classe.
    public function __set($atributo, $valor) {
        $this->dados[$atributo] = $valor;
    }

    # __get Possibilita retornar o atributo private do objeto fora do escopo da classe.
    public function __get($atributo) {
        return $this->dados[$atributo];
    }

    # __toString executa quando tentamos imprimir o objeto
    public function __toString() {
        return "Tentei imprimir o objeto";
    }

    # __invoke() executa quando tentamos usar o objeto como chamada de uma função.
    public function __invoke() {
        return "Tentei chamar o objeto como função";
    }
}



$pessoa = new Pessoa();
$pessoa->nome = "Matheus";
$pessoa->idade = 50;
$pessoa->sexo = "Masculino";

echo $pessoa->nome."<br>";
echo $pessoa->idade."<br>";
echo $pessoa->sexo."<br>";
echo $pessoa."<br>";
echo $pessoa()."<br>";