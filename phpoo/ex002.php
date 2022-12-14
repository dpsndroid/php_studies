<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <a href="ex001.php">Exercício 01</a>
    <a href="ex003.php">Exercício 03</a>
    <h1>PHP orientado a objetos</h1>
    <?php
        class Caneta{
            public $modelo;
            private $cor;
            private $ponta;
            private $tampada;

            //public function __construct(){
            //    $this-> cor = "Azul";
            //    $this-> tampar();
            
            // outra forma
            public function __construct($m, $c, $p){
                $this-> cor = $c;
                $this-> modelo = $m;
                $this-> ponta = $p;
                $this-> tampar();

            }
            public function tampar(){
                $this -> tampada = true;
            }
            public function getModelo(){
                return $this -> modelo;
            }
            public function setModelo($m){
                $this -> modelo = $m;
            }
            public function getPonta(){
                return $this -> ponta;
            }
            public function setPonta($p){
                $this -> ponta = $p;
            }
        }
    ?>

</body>
</html>