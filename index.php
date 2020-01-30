<?php 

/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);


# Tratamento de exceções
class NewsLetter {
    public function cadastrarEmail($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("Este email é inválido", 1);
        else: 
            echo "Email cadastro com sucesso!";
        endif;
    }
}

$newsLetter = new NewsLetter();
try {
    $newsLetter->cadastrarEmail("diovane@");
} catch(Exception $e) {
    echo "Messagem: ". $e->getMessage()."<br>";
    echo "Código: ". $e->getCode()."<br>";
    echo "Linha: ". $e->getLine()."<br>";
    echo "Arquivo: ". $e->getFile()."<br>";
}






