<?php

/*
Classes abstratas são classes modelos para outras classes, logo não podem ser instânciadas 
como objetos.
*/

abstract class Banco {

    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    abstract protected function sacar($s); # define que a classe sacar é obrigatória nas classes que herdardam Banco
    abstract protected function depositar($d); # define que a classe sacar é obrigatória nas classes que herdardam Banc
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
