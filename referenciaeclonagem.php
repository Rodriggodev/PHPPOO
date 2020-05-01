<?php
  // REFERENCIA E CLONAGEM DE OBJETOS
  class Pessoa{
    public $idade;

    public function __clone(){ // metodo magico

      echo "conlagem de objetos"; // é ultilizado quando usamos o metodo clone

    }

  }

  $pessoa = new Pessoa();
  $pessoa->idade = 27;

  $pessoa2 = clone $pessoa; // pessoas2 é um objeto que faz referencia a pessoa e por isso que ele retorna idade 34 e nao 27
  $pessoa2->idade = 34;

  echo $pessoa->idade;
  // o clone faz retornar o 27.

  // para exibir 34 tem que da um echo $pessoa2->idade;
 ?>
