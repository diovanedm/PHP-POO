<?php 

abstract class Banco {
    protected $saldo;

    public function setSaldo($s) {
        $this->saldo = $s;
    }
    public function getSaldo() {
        echo "<br> Saldo: ".$this->saldo;
        return $this->saldo;
    }

    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
}

class Itau extends Banco { 
    public function Sacar($s) {
        $this->saldo -= $s;
        echo "<br> Sacou ".$s;
    }
    public function Depositar($d) {
        $this->saldo += $d;
        echo "<br> Depositou ".$d;
    }
}

$itau = new Itau;
$itau->setSaldo(500);
$itau->getSaldo();

$itau->Sacar(250);
$itau->getSaldo();

$itau->Depositar(1000);
$itau->getSaldo();





