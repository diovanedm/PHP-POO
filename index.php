<?php 
# HERANÇA

class Veiculo {
    private $modelo;
    public $cor;
    public $ano;

    public function Andar() {
        echo "Andou ";
    }
    public function Parar() {
        echo "Parou ";
    } 
}

class Carro extends Veiculo {
    public function ligarLimpador() {
        echo "limpando em 321 <br>";
    }

    public function setModelo($m) {
        $this->modelo = $m;
    }
    public function getModelo() {
        return $this->modelo."<br>";
    }
}

class Moto extends Veiculo {
    public function darGrau() {
        echo "dando grau em 321";
    }
}

$veiculo = new Carro();
$veiculo->setModelo("Corsa 2.0");
echo $veiculo->getModelo();
var_dump($veiculo);