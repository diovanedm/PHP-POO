<?php 
# Referência e Clonagem de objetos

class Pessoa {
    public $idade;
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

$pessoa2 = clone $pessoa;
$pessoa2->idade = 35;

echo $pessoa->idade;
echo $pessoa2->idade;




