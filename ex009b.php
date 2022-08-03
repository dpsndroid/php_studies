<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 09b</title>
</head>
<body>
    <h1>Resultado Exercício 09</h1>
    <a href="ex009.php">Voltar</a>
    <br><br>
    <?php
        $r1 = isset($_GET["v1"])?$_GET["v1"]:0;
        $r2 = isset($_GET["v2"])?$_GET["v2"]:0;
        $r3 = isset($_GET["v3"])?$_GET["v3"]:0;
        $r4 = isset($_GET["v4"])?$_GET["v4"]:0;
        $r5 = isset($_GET["v5"])?$_GET["v5"]:0;
        $soma = $r1 + $r2 + $r3 + $r4 + $r5;
        echo "Os valores inseridos foram: $r1, $r2, $r3, $r4 e $r5.";
        echo "<br>A soma dos valores é igual a: $soma";
    ?>
    <p><strong>Outra forma</strong></p>
    <?php
        $i = 1;
        while ($i <= 5) {
            $v = "num".$i;
            $url = "v".$i;
            $$v = isset($_GET[$url])?$_GET[$url]:0; # cria as variáveis $num dinamicamente
            $i ++;
        }
        echo "$num1, $num2, $num3, $num4, $num5";
    ?>
    <p><strong>Terceiro exercício</strong></p>
    <?php
        $x = isset($_GET["ini"])?$_GET["ini"]:0;
        $y = isset($_GET["fim"])?$_GET["fim"]:0;
        $z = isset($_GET["int"])?$_GET["int"]:0;
        if ($x < $y) {
            while ($x <= $y){
                echo $x . ", ";
                $x += $z;
            }
        }
        elseif ($x > $y) {
            while ($x >= $y){
                echo $x . ", ";
                $x -= $z;
            }
        }
    ?>
</body>
</html>