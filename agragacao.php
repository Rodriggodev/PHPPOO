<?php
//AGRAGACAO quando uma classe precisa de outra classe para executar sua ação, ou seja, uma classe utiliza a outra como parte de si propria
class Produtos{
  public $nome;
  public $valor;

  function __construct($nome, $valor) {
    $this->nome = $nome;
    $this->valor = $valor;
  }
}

class Carrinho{
  public $produtos;

  public function add(Produtos $produto) { // agregação acontecendo aqui nos parametros
    $this->produtos[] = $produto;

  }

  public function exibe() {
    foreach ($this->produtos as $produto) {
      echo $produto->nome. '<br>';
      echo $produto->valor. '<hr>';
    }
  }
}

$produto1 = new Prodrutos("notebook","1400");
$produto2 = new Produtos("mouse", "25");

$carrinho = new Carrinho();
$carrinho ->add($produro1);
$carrinho ->add($produto2);

$carrinho->exibe();


 ?>
