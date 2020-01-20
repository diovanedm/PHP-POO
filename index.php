<?php 
#Métodos e atributos estáticos

class Login {
    public static $user;

    public static function verificaLogin() {
        echo "O ".self::$user." está logado!";
    }

    public function sairSistema() {
        echo "O usuário deslogou";
    }
}

Login::$user = "Diovane";
Login::verificaLogin();
$login = new Login();
$login->sairSistema();