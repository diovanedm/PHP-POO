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

# Associação 
class Senha {
    public $senha;
    public $pessoa;
}

class Diovane {
    public $nome;
    public $idade;
}

$diovane = new Diovane();
$diovane->nome = "Diovane Maia Soares";
$diovane->idade = 21;

$senha = new Senha();
$senha->senha = 1234;
$senha->pessoa = $diovane;

echo "Meu nome é ".$senha->pessoa->nome." tenho ".$senha->pessoa->idade." e minha senha é: ".$senha->senha;

