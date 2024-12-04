<?php

# Relação de objetos

# Agregação

# Na agregação, uma classe precisa da outra para executar sua ação, ou seja, uma classe utiliza a outro
# como parte de si própria.

class Produto {
    public $nome;
    public $valor;

    public function __construct($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;
    
    # Relizando uma agregação...
    public function adiciona(Produto $produto) {
        $this->produtos[] = $produto;
    }

    public function exibe() {
        foreach ($this->produtos as $produto) {
           echo $produto->nome." --- ";
           echo $produto->valor."<hr>";
        }
    }
}

$produto1 = new Produto("Notebook", "1500");
$produto2 = new Produto("Mouse", "50");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);
$carrinho->exibe();
