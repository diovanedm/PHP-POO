<?php 
#Polimorfismo

class homemGrande {
    public static $homem;

    public static function Andar() {
        echo self::$homem;
    }
}

class homemPequeno extends homemGrande {
    public static function Andar() {
        echo self::$homem;
    }
} 

homemGrande::$homem = "andou";
homemGrande::Andar(); 
echo '<br>';
homemPequeno::$homem = "correu";
homemPequeno::Andar();