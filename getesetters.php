<?php
class Login{
  public $email;
  public $senha;

  public function Logar(){
    if($this->email == "teste@teste.com" and $this->senha == "123456"):
      echo "logado com sucesso!";
    else:
      echo "Dado invalido";
  endif;
  }
}

// ATRIBUTOS OQUE NAO É NADA INTERESSANTE DE SE FAZER
// SO PODEMOS ACESSAR OS ATRIBUTOS FORA DA CLASSE QUANDO ELES SÃO PUBLICOS(PUVLIC)
$logar = new Login();
$logar -> email = "teste@teste.com";
$logar -> senha = "1234567";
$logar-> Logar();


 ?>
