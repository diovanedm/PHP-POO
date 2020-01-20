<?php 

class Pessoa {
    const nome = "Rodrigo";

    public function exibirNome() {
        echo self::nome;
    }
}

class Rodrigo extends Pessoa {
    const nome = "Oliveria";

    public function exibirNome() {
        echo parent::nome;
        echo " ";
        echo self::nome;
    }
}

$rodrigo = new Rodrigo();
$rodrigo->exibirNome();