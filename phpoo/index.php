<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial de estudo de PHP orientado a objetos</title>
</head>
<body>
    <a href="ex001.php">Exercício 01</a>
    <pre>
    <?php
        require_once "ex002.php";
        //$c1 = new Caneta();
        //outra forma
        $c1 = new Caneta("Bic", "Azul", 0.5);
        $c2 = new Caneta("Kik", "Verde", 0.6);
        //$c1 -> setModelo("Bic");
        //outra forma
        //$c1 -> modelo = "Bic";
        //$c1 -> setPonta(0.5);
        //outra forma
        //$c1 -> ponta = 0.5; nesse caso não vai funcionar pois o classe é privada
        print_r($c1);
        echo "<br>";
        print_r($c2);
        //print "Eu tenho uma caneta {$c1->getModelo()} de calibre {$c1->getPonta()}";
    ?>
    </pre>
</body>
</html>