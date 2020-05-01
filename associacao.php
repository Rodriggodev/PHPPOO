<?php
  // RELAÇÃO ENTRE OBJETOS(ASSOCIAÇÃO)
// ASSOCIAÇÃO-> acontece quando um objeto "ultiliza" outro, porém sem que eles dependam um do outro.

class Pedido{

  public $numero;
  public $cliente;

}

class Cliente{

  public $nome;
  public $endereco;
}

$cliente = new Cliente();
$cliente->nome="joao de sousa";
$cliente->endereco = "Sao luis, liberdade,casa25";

$pedido = new Pedido();
$pedido->numero = "0098";
$pedido->cliente = $cliente;//associação

// abaixo é para caso queira salvar em um banco de dados.

$dados = array(
  'numero' => $pedido->numero,
  'nome_cliente' => $pedido->cliente->nome,
  'endereco_cliente' =>$pedido->cliente->endereco;
);

var_dump($dados);

 ?>
