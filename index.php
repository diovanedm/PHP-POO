<?php 
#Namespaces

require 'classes/Produto.php';
require 'models/Produto.php';

use classes\Produto as produtClasses;
$produto = new produtClasses();
$produto->mostrarDetalhes();

echo "<br>";

use models\Produto as productModels;
$produto2 = new productModels();
$produto2->mostrarDetalhes();




