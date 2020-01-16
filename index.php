<?php 
# HERANÇA

class Veiculo {
    public $modelo;
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
}

class Moto extends Veiculo {
    public function darGrau() {
        echo "dando grau em 321";
    }
}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->Andar();
$carro->ligarLimpador();

$moto = new Moto();
$moto->modelo = "XRE 300";
$moto->cor = "Branca";
$moto->ano = 2015;
$moto->Andar();
$moto->darGrau();
