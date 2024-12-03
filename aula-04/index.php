<?php

# Herança é um recurso que permite que classes compartilhem atributos e métodos ou comportamentos generalizados

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function andar() {
        echo "Andando..."."<br>";
    }

    public function parar() {
        echo "Parando..."."<br>";
    }
}

class Carro extends Veiculo {
    # Método exclusivo de carros
    public function ligarLimpador() {
        echo "Ligando limpador..."."<br>";
    }

    # Método exclusivo de carros
    public function desligadorLimpador() {
        echo "Desligando limpador..."."<br>";
    }
}

class Moto extends Veiculo {
    # Método exclusivo de moto
    public function darGrau() {
        echo "Dando grau..."."<br>";
    }

    # Método exclusivo de moto
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