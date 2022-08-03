<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
</head>
<body>
    <a href="ex012.php">Exemplo 012</a>
    <a href="ex014.php">Exemplo 014</a>
    <h1>Rotinas - parte 2 - funções</h1>
<div>
    <?php
        echo "<h2>Passagem por valor</h2>";
        function teste($x){
            $x += 2;
            echo "O valor de X é $x";
        }
        $a = 3;
        teste($a);
        echo "<br>O valor de A é $a";

        echo "<h2>Passagem por referência</h2>";
        function teste2(&$y){ # com & passa o parâmetro em vez do valor, altera a variável
            $y += 2;
            echo "O valor de Y é $y";
        }
        $b = 3;
        teste2($b);
        echo "<br>O valor de B é $b";

        echo "<h2>Usando rotina externa</h2>";
        include "funcoes.php"; # Para incluir arquivo externo
        echo "Testando novas funções";
        ola();
        mostraValor(25);
        echo "<br>Finalizando programa!";
        /*
        require "funcoes.php";  # igual include, mas se não encontrar nada, para o arquivo
        echo "Testando novas funções";
        ola();
        mostraValor(25);
        echo "<br>Finalizando programa!";

        
        include_once  = permite incluir a função apenas uma vez
        require_once
        */
    ?>
</body>
</html>