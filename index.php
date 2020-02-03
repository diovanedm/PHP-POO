<?php 

/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);


# Métodos mágicos

class Pessoa {
    private $dados;

    public function __set($dado, $valor){
        $this->dados[$dado] = $valor;
    }

    public function __get($dado){
        return $this->dados[$dado];
    }

    public function __tostring() {
        return "Tentei imprimir o objeto";
    }

    public function __invoke() {
        return "Objeto como função";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Diovane";
$pessoa->dado = 21;
$pessoa->sexo = "Masculino";

echo $pessoa->nome;
echo $pessoa->dado;
echo $pessoa->sexo; 

echo "<br>";

echo $pessoa;

echo "<br>";

echo $pessoa();




