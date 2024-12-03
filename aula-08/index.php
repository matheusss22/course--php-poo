<?php

# Com static não precisamos de instanciar a classe

class Login {
    public static $user;

    public static function verificaLogin() {
        echo "O usuário ".self::$user." está logado!"; # this não funciona em membros static
    }

    public function sairSistema() {
        echo "O usuário deslogou";
    }
}

Login::$user = "admin";
Login::verificaLogin();

//Login::sairSistema(); # gera erro!

# Devemos instanciar a classe para acessar métodos não static:
$login = new Login();
$login->sairSistema();