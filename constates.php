<?php
  //Costantes, SELF E PARENT
class Pessoa{

    const nome = "Rodrigo";

    public function exibirNome(){
      echo self::nome; // self na hora de chamar uma const(costante).

    }
  }

class Rodrigo extends Pessoa{
  const nome = "Martins";
  public function exibirNome(){
    echo parent::nome;
  }
}
//para referenciar a cost dentro do escopo da class precisamos do self:: e nome da consta

$rodrigo = new Rodrigo();
$rodrigo->exibirNome();

//para referencia a const da classe pai (Pessoa), ultilizamos ao inves do self usamos o parent

 ?>
