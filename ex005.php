<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 05</title>
</head>
<body>
    <h1>Operadores relacionais</h1>
    <a href="ex004.php">Exemplo 004</a>
    <a href="ex006.php">Exemplo 006</a>
    <br><br>
    <?php
    /*
    maior > , menor < , maior ou igual >= , menor ou igual <= ,
    diferente <>  != , igual == , idêntico === ,
    operador unário = expressão?verdadeiro:falso
    exemplo: $maior = $a>$b?$a:$b  - se a maior que b, variável recebe a, senão b
    */
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    echo "Os valores foram $n1 e $n2";
    $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
    echo "<br>O resultado é $r";
    $n3 = $_GET["c"];
    $n4 = $_GET["d"];
    $tipo = $_GET["op"];
    echo "Os valores foram $n3 e $n4";
    $d = ($n3 == $n4) ? "sim" : "não";
    echo "<br>As variáveis são iguais:  $d";
    $e = ($n3 === $n4) ? "sim" : "não";
    echo "<br>As variáveis são idênticas:  $e";
    $nota1 = $_GET["e"];
    $nota2 = $_GET["f"];
    $media = ($nota1 + $nota2) / 2;
    $condicao = ($media > 7) ? "aprovado" : "reprovado";
    echo "<br>A média entre $nota1 e $nota2 é $media";
    echo "<br>O aluno está $condicao";
    echo "<br>Outra opção: O aluno está ".(($media > 7) ? "aprovado" : "reprovado");
    /*
    Operadores lógicos: e (and &&) , ou (or ||), xor,  não (!)
    */
    $ano = $_GET["g"];
    $idade = 2022 - $ano;
    echo "<br>Quem nasceu em $ano tem $idade anos de idade";
    $voto = ($idade>=18 && $idade < 65) ? "ELEGÍVEL" : "INELEGÍVEL";
    echo "<br>O eleitor é $voto para votar";

    ?>
</body>
</html>