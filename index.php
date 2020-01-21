<?php 
#Namespaces

require 'classes/Produto.php';
require 'models/Produto.php';

$produto = new\classes\Produto();
$produto->mostrarDetalhes();
echo "<br>";
$models = new\models\Produto();
$models->mostrarDetalhes();


