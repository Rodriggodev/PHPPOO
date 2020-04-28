<?php

class Pessoa{ //pessoa é o nome da classe

    public $nome; // atributo que sao as caracteristicas
    public $idade;

    public function Falar(){
      echo $this->nome. " de ".$this->idade." acabou de falar "; // meaniera correta é essa
    }



}

$rodrigo = new Pessoa();// rodrigo é um objeto

$rodrigo -> nome = "rodrigo costa martins";
$rodrigo -> idade= 27;

//var_dump($rodrigo);

$rodrigo -> falar();
echo"<br>";

//echo $rodrigo->nome; maneira incorreta

 ?>
