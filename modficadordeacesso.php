<?php
  // MODIFICADORES DE ACESSO php
//os modificadore de acesso
// public - fará com que nao haja ocultação nenhuma, toda propriedade ou método declarado como publico e acessiveis por todos que quiserem acessa-los

// protected - visibilidade protecd faz com que todos os herdeiros vejam as propriedades ou métodos protegidos como se fossem publicos

// private - ao contratio do public, esse modifivador faz com que qualquer metodo ou propriedade seja somente só pela casse que a declarou

class Veiculo{
  protecd $modelo;
  public $ano;
  public $cor;

  public function Andar(){
    echo "andou";
  }
  public function Parar(){
    echo "Parou";
  }

  public function setModelo($m){ // tem que  passar uma variavel
  	$this->modelo=$m;
  }

  public function getModelo(){
  	return $this->modelo;
  }

}

class Carro extends Veiculo {
  pubic function LigarLimpador(){
    echo "Limpando 321"
  }
}

class Moto extends Veiculo{
  public function daGrau(){
    echo "chamou no grau, papai!";
  }
}

$veiculo = new Veiculo();
$veiculo->setModelo('Honda');
echo $veiculo->getModelo(); // essa é usada na forma protecd

 ?>
