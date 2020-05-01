<?php
//metodos magicos phppoo
//invoke-> é chamado quando a gente tenta chamar o objeto como função
//tostring->
//get
//set-> setar um valor

class Pessoa{
  private $dados = array();

  public function __set($nome, $valor){ //set-> metodo magico
    $this->dados[$nome] = $valor;
  }
  public function __get($nome){ //metodo magico
    return $this->dados[$nome];

  }
  public function __tostring(){
    return"tentei imprimir o objeto pessoa";
  }

  public function __invoke(){
    return"objeto como função";
  }
}

$pessoa= new Pessoa();
$pessoa->nome="Ariane Viegas";
$pessoa->idade = "24";
$pessoa->sexo = "F";
//var_dump($pessoa);
echo $pessoa();// usando o invoke
/*echo $pessoa->nome;
echo $pessoa->idade;
/*echo $pessoa->sexo;
 ?>
