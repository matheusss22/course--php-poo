<?php

# Método construtor.

class Login {
    private $email;
    private $senha;
    private $nome;

    # Método construtor executa métodos setter para iniciar valores
    public function __construct($email, $senha, $nome) {
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setNome($nome);
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $email_filtrado = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $email_filtrado;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function logar() {
        if ($this->email == "teste@teste.com" && $this->senha == "123456") {
            echo "Logado com sucesso!";
        } else {
            echo "Dados inválidos";
        }
    }
}

$logar = new Login($email="teste@teste.com", $senha="123456", $nome="Matheus");
echo "Email = ".$logar->getEmail()."<br>";
echo "Senha = ".$logar->getSenha()."<br>";
echo "Nome = ".$logar->getNome()."<br>";
$logar->logar();
