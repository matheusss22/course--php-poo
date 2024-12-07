<?php

/*

Classes e métodos abstratos:

As classes e métodos abstratos são utilizados para estabelecer um contrato ou modelo para outras classes, 
garantindo que certas funcionalidades sejam implementadas de maneira específica pelas classes derivadas.

# Classe Abstrata:

    Uma classe que não pode ser instanciada diretamente. Serve como base para outras classes, definindo um modelo
    ou estrutura que as classes derivadas devem seguir.

    ## Caracteristicas:

    1. Pode conter métodos abstratos (que devem ser implementados pelas classes derivadas).
    2. Pode conter métodos concretos (com implementação já definida).
    3. Geralmente usada para compartilhar código comum entre várias classes relacionadas.

    Usado quando: Você quer criar uma classe genérica que será especializada por classes filhas.

# Método Abstrato:

    Um método declarado em uma classe abstrata que não possui implementação. As classes derivadas devem obrigatoriamente
    implementar esses métodos.

    ## Caracteristicas:

    1. Declarado apenas em classes abstratas.
    2. Não possui corpo (somente a assinatura do método).
    3. Força as classes derivadas a fornecerem sua própria implementação.

*/

abstract class Banco {

    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    # Método concreto
    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    # Método concreto
    public function getSaldo() {
        return $this->saldo;
    }

    # Método abstrato
    abstract protected function sacar($s); # Método sacar é obrigatório nas classes que herdam Banco.

    # Método abstrato
    abstract protected function depositar($d); # Método depositar é obrigatório nas classes que herdam Banco.
}

class Itau extends Banco {

    public function sacar($s) {
        $this->saldo  -= $s;
        echo "<hr>"."Sacou: R$".$s;
    }

    public function depositar($d) {
        $this->saldo += $d;
        echo "<hr>"."Depositou: R$".$d;
    }
}



//$banco = new Banco(); => Erro pois Banco é uma classe abstrata
$itau = new Itau();
$itau->setSaldo(1000.00);
echo "<hr>"."R$".$itau->getSaldo();
$itau->sacar(250.00);
echo "<hr>"."R$".$itau->getSaldo();
$itau->depositar(900.00);
echo "<hr>"."R$".$itau->getSaldo();
