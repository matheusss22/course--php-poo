<?php

# Métodos getter e setter.

class Login {

    private $email;
    private $senha;

    public function getEmail() {
        # Um método get é útil para capturar valores privados na classe:
        return $this->email;
    }

    public function setEmail($email) {
        # Um método set é útil pois nele podemos fazer validações no atributo do objeto:
        $email_filtrado = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $email_filtrado;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function logar() {
        if ($this->email == "teste@teste.com" && $this->senha == "123456") {
            echo "Logado com sucesso!";
        } else {
            echo "Dados inválidos";
        }
    }
}



$logar = new Login();
$logar->setEmail("teste(/)@teste.com");
$logar->setSenha("123456");
echo "Email = ".$logar->getEmail()."<br>";
echo " Senha = ".$logar->getSenha()."<br>";
$logar->logar();
