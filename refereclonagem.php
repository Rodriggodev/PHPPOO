<?php
//Ocorrência anormal que afecta o funcionamento da aplicação
// execption é a classe base para todos excption
// message, mensagem
// code,  mostra o codigo
// file,  mostra o diretorio
// line, mostra a linha

class Newslatter{
  public function cadastrarEmail($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      throw new Exception("este email é invalido", 1);

    }
  else{
    echo "email cadastrado com sucesso";
  }

  }
}
$newsllater = new Newslatter();
try{
$newsllater->cadastrarEmail("rodrygolacort@gmail.com");
} catch(Exception $e){
  echo $e->getMessage();// uma das propriedades
}
 ?>
