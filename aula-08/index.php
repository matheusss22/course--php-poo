<?php

# Com static não precisamos de instanciar a classe, no entanto, isso não é obrigatório.

class Login {

    public static $user;

    public static function verificaLogin() {
        echo "O usuário ".self::$user." está logado!"; # this não funciona em membros static
    }

    public function sairSistema() {
        echo "O usuário deslogou";
    }
}



# Atributos e métodos static são acessados sem precisar de instanciar um objeto, pertecem a classe:
Login::$user = "admin";
Login::verificaLogin();

//Login::sairSistema(); # gera erro pois não está definido como método static na classe!
# Devemos instanciar a classe para acessar métodos que não são static
$login = new Login();
$login->sairSistema();