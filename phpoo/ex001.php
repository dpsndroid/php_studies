<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <a href="index.php">Index</a>
    <a href="ex002.php">Exercício 02</a>
    <h1>PHP orientado a objetos</h1>
    <?php
        require_once "Caneta.php";
        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = false;
        $c1->destampar();
#----------------------------------------------------------------       
        $c1->rabiscar();    # chama o método rabiscar da classe
        echo "<br><br>";
        var_dump($c1);
        echo "<br><br>";
        print_r($c1);
#-------------------------------------------------------------
        $c2 = new Caneta;
        $c2->cor = "verde";
        $c2->carga = 50;
        $c2->tampar();
        echo "<br>";
        print_r($c2);
    ?>
</body>
</html>