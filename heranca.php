<?php
    // HERANÇA
// ULTILIZAMOS EM ARQUIVO SEPARADO
// CRIAMOS UMA CLASSE VEICULO AONDE
// AS CLASSES MOTO E CARRO POSSUEM AS MESMAS CARACTERISTICAS
// E EM CLASS CARRO COLOCAMOS OS EXTEDS E VEICULO QUE É DÁ CLASSE PRINCIPAL QUE SERVE PARA OS DOIS 
    
    class Veiculo{
        public $modelo;
        public $cor;
        public $ano;
        
    public function Andar(){
        echo "Andou";
            
        }
    public function Parar(){
            echo "parou";
        }    
        
    }

    class Carro extends Veiculo{
        public function Portas();// metodo especifico de carro
    }

    class Moto extends Veiculo{
        public function Dagrau(); //metodo especifico da moto
        
        
    }

$carro = new Carro();
$carro->modelo = 'gol';
$carro->cor = 'preto';
$carro->ano = '2014';
$carro->Andar();
echo"<br>";
$carro->Parar();

$moto = new Moto();
$moto->modelo="CB1000";
$moto->cor = "azulbb";
$moto->ano="2020";
echo"<br>";
$moto->Andar();
echo"<br>";
$moto->Parar();



?>    