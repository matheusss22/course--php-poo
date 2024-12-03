<?php

/*
    Modificadores de acesso

    public - Fará com que não haja ocultação nenhuma, toda propriedade ou método declarado como 
    public será acessível por todos que quiserem acessá-los.

    protected - visibilidade protected faz com que somente os herdeiros vejam as propriedades ou
    métodos.

    private - ao contrário do public, esse modificador faz com que qualquer método ou propriedade 
    seja visível só e somente só pela classe que a declarou.
*/

class Veiculo {

    private $modelo;
    private $cor;
    private $ano;

    protected function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    protected function setCor($cor) {
        $this->cor = $cor;
    }

    protected function setAno($ano) {
        $this->ano = $ano;
    }

    protected function getModelo() {
        return $this->modelo;
    }

    protected function getCor() {
        return $this->cor;
    }

    protected function getAno() {
        return $this->ano;
    }

    public function andar() {
        echo "Andando..."."<br>";
    }

    public function parar() {
        echo "Parando..."."<br>";
    }
}

class Carro extends Veiculo {

    private $possuiCarlotas;

    public function __construct($modelo, $cor, $ano, $possuiCarlotas) {
        $this->setModelo($modelo);
        $this->setCor($cor);
        $this->setAno($ano);
        $this->setpossuiCarlotas($possuiCarlotas);
    }
    
    # Método exclusivo de carros
    public function setpossuiCarlotas($possuiCarlotas) {
        $this->possuiCarlotas = $possuiCarlotas;
    }

    # Método exclusivo de carros
    public function getpossuiCarlotas() {
        return $this->possuiCarlotas;
    }

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

    private $possuiPortaCapacete;

    public function __construct($modelo, $cor, $ano, $possuiPortaCapacete) {
        $this->setModelo($modelo);
        $this->setCor($cor);
        $this->setAno($ano);
        $this->setPossuiPortaCapacete($possuiPortaCapacete);
    }

    # Método exclusivo de carros
    public function setPossuiPortaCapacete($possuiPortaCapacete) {
        $this->possuiPortaCapacete = $possuiPortaCapacete;
    }

    # Método exclusivo de carros
    public function getPossuiPortaCapacete() {
        return $this->possuiPortaCapacete;
    }

    # Método exclusivo de moto
    public function darGrau() {
        echo "Dando grau..."."<br>";
    }

    # Método exclusivo de moto
    public function cair() {
        echo "Caindo..."."<br>";
    }
}



echo "<h1>######### Carro ###########</h1>";

$carro = new Carro(
    $modelo="Gol", 
    $cor = "Vermelho", 
    $ano = 2018,
    $possuiCarlotas = "Não"
);

$carro->andar();
$carro->parar();
$carro->ligarLimpador();
$carro->desligadorLimpador();
//$carro->setCor("Preto"); -> Causa erro pois é protected em Veiculo

echo "Possui carlotas = ".$carro->getpossuiCarlotas()."<br>";
echo "<pre>";
print_r($carro);
echo "</pre>";

$carro->setpossuiCarlotas($possuiCarlotas="Sim");

echo "Possui carlotas = ".$carro->getpossuiCarlotas()."<br>";

echo "<pre>";
print_r($carro);
echo "</pre>";

echo "<h1>######### Moto ###########</h1>";

$moto = new Moto(
    $modelo="Honda Biz", 
    $cor = "Azul", 
    $ano = 2015,
    $possuiPortaCapacete = "Não"
);

$moto->andar();
$moto->parar();
$moto->darGrau();
$moto->cair();
//$moto->setCor("Preta"); -> Causa erro pois é protected em Veiculo

echo "Possui porta capacete = ".$moto->getPossuiPortaCapacete();

echo "<pre>";
print_r($moto);
echo "</pre>";


$moto->setPossuiPortaCapacete($quantidadePortas="Sim");
echo "Possui porta capacete = ".$moto->getPossuiPortaCapacete();

echo "<pre>";
print_r($moto);
echo "</pre>";
