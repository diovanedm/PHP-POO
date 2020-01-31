<?php 

/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);


# Relação entre os objetos(Associação)

class Cachorro {
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
}

class Adotador {
    public $cliente;
    public $nome;
}

$cachorro1 = new Cachorro("Floquinho", "2", "Masculino");
$cachorro2 = new Cachorro("Lupi", "3", "Masculino");

$cliente1 = new Adotador();
$cliente1->nome = "Vitor";
$cliente1->cliente = $cachorro1;

$donoDoCachorro = array(
    "nome" => $cliente1->nome,
    "nomeCachorro" => $cliente1->cliente->nome,
    "idadeCachorro" => $cliente1->cliente->idade,
    "sexoCachorro" => $cliente1->cliente->sexo
);

foreach($donoDoCachorro as $dados) {
    echo $dados."<br>";
}
var_dump($cliente1->cliente);