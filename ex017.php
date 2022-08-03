<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17</title>
</head>
<body>
    <a href="ex016.php">Exemplo 016</a>
    <a href="ex018.php">Exemplo 018</a>
    <h1>Variáveis compostas parte 2</h1>
    <?php
        $v = array("a","j","m","x","k");
        print_r($v);
        echo "<br>";
        var_dump($v);
        echo "<br>";
        $tot = count($v);
        echo "O vetor tem $tot elementos";
        echo "<br><br>Coloca o O no final do vetor<br>";
        $v[] = "o";
        print_r($v);
        echo "<br><br>Coloca o 7 no final do vetor<br>";
        array_push($v,7); #coloca o 7 no final do vetor
        print_r($v);
        echo "<br><br>Vai eliminar o último elemento do vetor<br>";
        array_pop($v); # vai eliminar o último elemento do vetor
        print_r($v);
        echo "<br><br>Vai acrescentar no início do vetor<br>";
        array_unshift($v, 7); # vai acrescentar no início do vetor
        print_r($v);
        echo"<br><br>Vai eliminar o item do início do vetor<br>";
        array_shift($v); # vai eliminar o item no início do vetor
        print_r($v);
        echo "<br><br>Coloca o vetor em ordem<br>";
        sort($v); # coloca o vetor em ordem
        print_r($v);
        echo "<br><br>Reverse sort, coloca em ordem, ao contrário<br>";
        rsort($v); # reverse sort, coloca em ordem, ao contrário
        print_r($v);
        echo "<br><br>Vai ordenar os valores, mas os índices continuam com sua posição<br>";
        asort($v); # vai ordenar os valores, mas os índices continuam com sua posição
        print_r($v);
        echo "<br><br>Igual ao asort, mas em ordem reversa<br>";
        arsort($v); # igual o asort, mas em ordem reversa
        print_r($v);
        echo "<br><br>Coloca o índice em ordem<br>";
        ksort($v); # Coloca o índice em ordem
        print_r($v);
        echo "<br><br>Coloca o índice em ordem, reversa<br>";
        krsort($v); # Coloca o índice em ordem, reversa
        print_r($v);
        echo "<br><br>";

    ?>
</body>
</html>