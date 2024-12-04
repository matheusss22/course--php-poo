<?php

# Exception

# Ocorrência anormal que afeta o funcionamento da aplicação.
# Exception é a classe base para todas Exceptions
# message, code, file, line

class Newsletter {

    public function cadastrarEmail($email) {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("Este email é inválido", 1);
        else:
            echo "Email cadastrado com sucesso!";
        endif;
    }
}



$newsletter = new Newsletter();

echo "Iniciando..."."<br>";

try {
    $newsletter->cadastrarEmail("contato");
} catch (Exception $e) {
    echo "Exceção capturada [message]: ".$e->getMessage()."<br>";
    echo "Exceção capturada [code]: ".$e->getCode()."<br>";
    echo "Exceção capturada [line]: ".$e->getLine()."<br>";
    echo "Exceção capturada [gile]: ".$e->getFile()."<br>";
}

