<?php
class Login{
  private $email;
  private $senha;

  public function getEmail(){
    return $this ->email;
  }

  public function setEmail($e){
    $email = filter_var($e, FILTER_SANITIZE_EMAIL);// LIMPA CARACTERES QUE NAO SAO RECONHECIDOS COMO EMAIL NO PHP
    $this->email = $e;
  }

  public function getSenha(){
    return $this->senha;
  }

  public function setSenha($s){
      $this->senha = $s;
  }


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
$logar -> setemail("teste@teste.com") ;
$logar -> setsenha("123456")  ;
$logar-> Logar();
 echo "<br>";

 echo $logar->getEmail();  // MOSTRA O EMAIL
 echo $logar->getSenha(); // MOSTRA A SENHA

 ?>

