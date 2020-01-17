<?php 
# HERANÇA

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    protected function Andar() {
        echo "Andou ";
    }
    private function naoAndou() {
        echo "Não andou ";
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

    public function mostrarAcao() {
        $this->Andar();
    }
    public function acaoNaoExecutada() {
        $this->naoAndou();
    }
}

class Moto extends Veiculo {
    public function darGrau() {
        echo "dando grau em 321";
    }
}

$veiculo = new Carro();
$veiculo->mostrarAcao();
$veiculo->acaoNaoExecutada();