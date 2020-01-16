<?php 

class Login {
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome){
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setNome($nome);
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($n) {
        $this->nome = $n;
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($e) {
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }
    public function setSenha($s) {
        $this->senha = $s;
    }

    public function Logar() {
        if($this->email == "teste@teste.com" and $this->senha == "123456"):
            echo "logado com sucesso ".$this->nome."<br>";
        else:
            echo "login invalido ".$this->nome."<br>";
        endif;
    }
}

$loginDiovane = new Login("diovane.dm@gmail.com", "diovane98", "Diovane Maia");
$loginDiovane->Logar();

// ----------------------------------

$loginTeste = new Login("teste/@teste.com", "123456", "Rodrigo Oliveira");
$loginTeste->Logar();

