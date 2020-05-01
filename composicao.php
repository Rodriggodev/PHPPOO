<?php
// COMPOSIÇÃO, quando uma classe cria instancia de outra classe dentro de se propria, sendo assim, quando ela for destruida a outra classe também será

class Pessoa{
  public function atribuiNome($nome){
    return "o nome da pessoa é".$nome;
  }
}

class Exibe{
  public $pessoa;
  public $nome;

  function __construct($nome){
    $this->pessoa = new Pessoa();
    $htis->nome = $nome;
  }
  public function exibeNome(){
    echo $this->pessoa->atribuiNome($this->nome);
  }
}

$exibe = new Exibe("José");
$exibe->exibeNome();
 ?>
