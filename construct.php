<?php
class Login{
  private $email;
  private $senha;
  private $nome;
//construct ou construtor é inicializado no new
  public function __construct($email, $senha, $nome){

    $this->nome = $nome;
    $this->setEmail($email);
    $this->setSenha($senha);

  }

  public function getNome(){

    return $this-> nome;
  }

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
$logar = new Login("teste@teste.com", "123456", "rodrigo martins"); // aqui estou recebendo os parametros das variaveis, ou seja os valores das variaveis declaradas como parametros la no construct ou construtor

$logar-> Logar();
 echo "<br>";

 echo $logar->getEmail(); // mostra o email
 echo $logar->getSenha(); // mostra a senha
 echo $logar->getNome(); // mostra o nome

 ?>
