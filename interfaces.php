<?php
  // INTERFACES serve para definir o modelo a ser usada por outras classes

interface Crud{

  public function create($data); // nao tem as chaves{} tem que ser public e so passa parametro quando for nescessario

  public function read();

  public function update();

  public function delete();
}

class Noticias implements Crud { // no interface nao colocamos o extends e sim implements

public function create ($data){ // tem que ser criado um de cada class pai la em cima

  //aqui vem a logica criar a noticia
}

public function read(){
 // logica para ler a noticia
}

public function update(){
//logica para atualizar
}

public function delete(){
//logica para  deletar alguma noticia

}

}


 ?>
