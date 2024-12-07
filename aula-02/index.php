<?php

# Métodos getter e setter.

class Login {

    private $email;
    private $senha;

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function logar() {
        if ($this->email === "teste@teste.com" && $this->senha === "123456") {
            echo "Logado com sucesso!";
        } else {
            echo "Dados inválidos";
        }
    }
}



$logar = new Login();
$logar->setEmail("teste@teste.com");
$logar->setSenha("123456");
echo "Email = ".$logar->getEmail()."<br>";
echo " Senha = ".$logar->getSenha()."<br>";
$logar->logar();
