<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
</head>
<body>
    <a href="ex011.php">Exemplo 011</a>
    <a href="ex013.php">Exemplo 013</a>
    <h1>Rotinas - parte 1 - funções</h1>
<div>
    <?php
        function soma($a,$b){
            $s = $a + $b;
            echo "<p>A soma vale $s</p>";
        }

        soma(3,4);
        soma(8,2);
        $x = 9;
        $y = 15;
        soma($x, $y);
        
        echo "<h2>Agora com função de retorno</h2>";

        function multi($a,$b){
            $m = $a * $b;
            return $m;
        }
        $w = 2;
        $z = 5;
        $res = multi($w, $z);
        echo "A multiplicação entre $w e $z é igual a $res";

        echo "<h2>Cálculo da função direto no <strong>return</strong></h2>";

        function divi($a,$b){
            return $a / $b;
        }
        $p = 25;
        $q = 5;
        $res = divi($p, $q);
        echo "A divisão de $p por $q é igual a $res";

        echo "<h2>Rotina com múltiplos parâmetros</h2>";

        function somar(){
            $p = func_get_args(); # Vai pegar os argumentos e colocar em um vetor nas posições a partir de 0
            $tot = func_num_args(); # vai receber o número de argumentos na função
            $s = 0;
            for ($i=0; $i < $tot; $i++){
                $s += $p[$i];
            }
            return $s;
        }
        
        $resu = somar(20,30,40,50,70);
        echo "A soma dos parâmetros é <strong>$resu</strong>";

    ?>
</div>
</body>
</html>