<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício02</title>
</head>
<body>
    <h1>Exercício 02</h1>
    <pre>
    <?php
        echo "Testando<br><br>";
        require_once "Caneta.php";
        $c1 = new Caneta;
        $c1-> modelo = "BIC Cristal";
        echo "<br><br>";
        $c1->rabiscar();  # os que etão exibidos foram chamados como públicos. Se fossem privados, daria erro
        $c1->tampar();
        var_dump($c1);
    ?>
    </pre>
</body>
</html>