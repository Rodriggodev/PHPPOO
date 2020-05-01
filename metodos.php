<?php
  // métodos e atributos estáticos.

  class Login{ // classe
    public static $user; // atributo staticos(static)

    public  static function verificarLogin(){ // metodo statico(static)
      echo " O usuario " .self::$user." esta logado ";

    }
  }
// com o meto static nao precisa istanciar a calsse login

// o $this é ultilizado quando se instancia a classe e nao funciona com membros static
//usamos o self

Login::$user = "admin";

Login::verificarLogin();

 ?>
