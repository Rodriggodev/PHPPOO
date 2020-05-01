<?php
  //polimorfismo é eu reescrever um meto herdado, meio que sobrescrever

  class Animal{
    public function Andar(){
      echo "o animal andou";
    }
  }

  class Cavalo extends Animal { // polimorfismo sobrescrevendo o metodo Andar e sem os ()
    public function Andar(){ // atributo da class principal e sobrescrevendo o eco
      echo "o cavalo andou";
    }

  }

  $animal = new Cavalo(); //
  $animal->Andar();


 ?>
