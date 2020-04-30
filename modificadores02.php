<?php
  //MODIFICADORES de acesso #02
//utilizando nos metodos
// O private so pode acessar de dentro do escopo da classe

class Veiculo{
  public $modelo;
  public $cor;
  public $ano;

  private  function Andar(){
    echo "Andou";
  }

  public function Parar(){

    echo "Parou";
  }

  public function mostrarAcao(){

    $this->Andar(); // acessando o metodo pri
  }

}

class Carro extends Veiculo{

  public function Limpardor(){

    echo "Limpando em 321";
  }
}
$carro = new Veiculo();
//$carro->Andar();
$carro->mostrarAcao(); // quando se é privat
