<?php

# Herança é um recurso que permite que classes compartilhem atributos, métodos ou comportamentos generalizados:

class Veiculo {

    # Atributos comuns a classes que contextualizam Veiculos:
    public $modelo;
    public $cor;
    public $ano;

    # Atributos comuns a classes que contextualizam Veiculos:
    public function andar() {
        echo "Andando..."."<br>";
    }

    public function parar() {
        echo "Parando..."."<br>";
    }
}

class Carro extends Veiculo {
    
    # Método exclusivo da classe de Carro:
    public function ligarLimpador() {
        echo "Ligando limpador..."."<br>";
    }

    # Método exclusivo da classe de Carro:
    public function desligadorLimpador() {
        echo "Desligando limpador..."."<br>";
    }
}

class Moto extends Veiculo {

    # Método exclusivo da classe de Moto:
    public function darGrau() {
        echo "Dando grau..."."<br>";
    }

    # Método exclusivo da classe de Moto:
    public function cair() {
        echo "Caindo..."."<br>";
    }
}



$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->andar();
$carro->parar();
$carro->ligarLimpador();
$carro->desligadorLimpador();

echo "<pre>";
print_r($carro);
echo "</pre>";

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2015;
$moto->andar();
$moto->parar();
$moto->darGrau();
$moto->cair();

echo "<pre>";
print_r($moto);
echo "</pre>";