<?php 

/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);


# Relação entre os objetos(Agregação)

class Cachorro {
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
}

class CasaDeAdocao {
    public $cachorros;

    public function adicionar(Cachorro $cachorro) {
        $this->cachorros[] = $cachorro;
    }

    public function mostrar() {
        foreach($this->cachorros as $cachorro) {
            echo $cachorro->nome."<br>";
            echo $cachorro->idade."<br>";
            echo $cachorro->sexo."<hr>";
        }
    }
}

$cachorro = new Cachorro("Floquinho", "2", "Masculino");
$cachorro1 = new Cachorro("Lupi", "3", "Masculino");

$casaDeAdocao = new CasaDeAdocao();

$casaDeAdocao->adicionar($cachorro);
$casaDeAdocao->adicionar($cachorro1);

$casaDeAdocao->mostrar();



