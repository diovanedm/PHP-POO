<?php 

/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);


# Composição

class Pessoa {
    public function atribuiNome($nome) {
        return "Meu nome é ".$nome;
    }
}

class Exibe {
    public $nome;
    public $pessoa;

    function __construct($nome) {
        $this->nome = $nome;
        $this->pessoa = new Pessoa();
    }

    public function exibeNome() {
        echo $this->pessoa->atribuiNome($this->nome);
    }
} 

$exibe = new Exibe("Diovane");
$exibe->exibeNome();