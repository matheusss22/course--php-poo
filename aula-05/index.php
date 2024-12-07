<?php

/*

Modificadores de acesso:

Os modificadores de acesso determinam a visibilidade e acessibilidade dos atributos 
(propriedades) e métodos de uma classe. Eles ajudam a controlar como e de onde esses 
elementos podem ser acessados. 

# public

    Permite que o atributo ou método seja acessado de qualquer lugar: dentro da classe, 
    por classes herdadas e por qualquer código externo.

# protected 

    Restringe o acesso ao atributo ou método apenas dentro da classe onde ele foi definido. 
    Não pode ser acessado por classes herdadas ou código externo.

# private 

    Permite que o atributo ou método seja acessado dentro da classe onde foi definido e por
    classes que herdam dela. Não pode ser acessado diretamente por código externo.

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
    
    public function setpossuiCarlotas($possuiCarlotas) {
        $this->possuiCarlotas = $possuiCarlotas;
    }

    public function getpossuiCarlotas() {
        return $this->possuiCarlotas;
    }

    public function ligarLimpador() {
        echo "Ligando limpador..."."<br>";
    }

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

    public function setPossuiPortaCapacete($possuiPortaCapacete) {
        $this->possuiPortaCapacete = $possuiPortaCapacete;
    }

    public function getPossuiPortaCapacete() {
        return $this->possuiPortaCapacete;
    }

    public function darGrau() {
        echo "Dando grau..."."<br>";
    }

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
