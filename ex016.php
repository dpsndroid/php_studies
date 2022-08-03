<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16</title>
</head>
<body>
    <a href="ex015.php">Exemplo 015</a>
    <a href="ex017.php">Exemplo 017</a>
    <h1>Variáveis compostas parte 1</h1>
    <pre>   <!--A tag pre irá melhorar a exibição-->
    <?php
    #os vetores no php são dinâmicos
    $n = array(3,5,8,2);
    print_r($n);
    $n[] = 7;   #cria uma nova posição de valor 7 no final do vetor
    print_r($n);
    $c = range(5,20,2);   #Cria um vetor de 5 a 20, contando de 2 em 2
    print_r($c);
    echo "<br>Os valores encontrados foram: ";
    foreach($c as $valor) {
        echo "$valor ";
    } 
    $v = array(3=> 5, 1=> 9, 0=> 8, 7=> 7,);
    print_r($v);
    $v[] = 9; # vai acrescentar nova posição no final, pois não foi indicada a desejada
    print_r($v);
    unset($v[0]); # vai anular a posição 0 do vetor
    print_r($v);
    echo "<br>Chaves associativas<br>";
    $d = array( "nome" => "Ana", "idade" => 23, "peso" => 65.5);
    print_r($d);
    $d["fuma"] = true;
    print_r($d);
    foreach($d as $chave => $valor) {
        echo "O valor de $chave é $valor<br>";
    }
    $n = array(array(2,3), array(3,4), array(9,5));
    print_r($n);
    $n[1][0] = $n[2][0];
    print_r($n);
    $n[1][0] = 8;
    print_r($n);
    ?>
    </pre>
</body>
</html>