<?php 

/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);


# Relação entre os objetos(Associação)

class Cliente {
    public $nome;
    public $endereco;
}
class Pedido {
    public $numero;
    public $cliente;
}

$cliente_01 = new Cliente();
$cliente_01->nome = "Diovane";
$cliente_01->endereco = "cel jose soares - 282 - Glória";

$pedido_01 = new Pedido();
$pedido_01->numero = 01;
$pedido_01->cliente = $cliente_01;

$dados = array(
    "numero_pedido_cliente" => $pedido_01->numero,
    "nome_cliente" => $pedido_01->cliente->nome,
    "endereco_cliente" => $pedido_01->cliente->endereco
);

echo $dados["numero_pedido_cliente"]."<br>";
echo $dados["nome_cliente"]."<br>";
echo $dados["endereco_cliente"];


