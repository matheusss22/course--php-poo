<?php

# Método construtor.

class Login {

    private $email;
    private $senha;
    private $nome;

    # O método construtor é chamado na instância do objeto
    public function __construct($email, $senha, $nome) {
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setNome($nome);
    }

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

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function logar() {
        if ($this->email === "teste@teste.com" && $this->senha === "123456") {
            echo "Logado com sucesso!";
        } else {
            echo "Dados inválidos";
        }
    }
}



$logar = new Login("teste@teste.com", "123456", "Matheus");
echo "Email = ".$logar->getEmail()."<br>";
echo "Senha = ".$logar->getSenha()."<br>";
echo "Nome = ".$logar->getNome()."<br>";
$logar->logar();
