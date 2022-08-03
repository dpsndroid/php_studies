<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14</title>
</head>
<body>
    <a href="ex013.php">Exemplo 013</a>
    <a href="ex015.php">Exemplo 015</a>
    <h1>Manipulando strings - parte 1</h1>
    <?php
        $p = "Leite";
        $pr = 4.5;
        printf ("O %s custa %.2f <br>", $p, $pr);
        $x[0] = 1;
        $x[1] = 2;
        $x[2] = 3;
        print_r($x); # já exibe o vetor. útil para testes
        echo "<br>";
        $v = array(3, 7, 6, 2, 1, 9);
        print_r($v);
        echo "<br>";
        var_dump($v);
        echo "<br>";
        var_export($v);
        echo "<br>";
        $txt = "Aqui temos um texto gigante que vai mostrar o funcionamento do php utilizando a função wordwrap, que sinceramente, não faço idéia para que serve. Estou aprendendo agora. Mas até que estou me surpreendendo positivamente com o php.";
        $res = wordwrap($txt, 50, "<br>\n", true); #Quebra o texto no html com br e no código com \n, no caso em 50 caracteres. O true irá quebrar a palavra quando chegar no 50
        echo "<br>". $res;
        $tam = strlen($txt);
        echo "<br>O texto acima ocupa $tam espaços";

        $nome = "  Jose da Silva  ";

        $novo = trim($nome);
        echo "<br><br>". $novo;
        echo "<br>". strlen($novo);
        
        $nova = ltrim($nome);
        echo "<br><br>". $nova;
        echo "<br>". strlen($nova);
        
        $novu = rtrim($nome);
        echo "<br><br>". $novu;
        echo "<br>". strlen($novu);

        $cont = str_word_count($nome, 0);
        echo "<br><br>O número de palavras em José da Silva é: <strong>$cont</strong>";

        echo "<br>";
        
        $cont1 = str_word_count($nome, 1); #Cria um vetor com as palavras
        print_r($cont1); #Exibe o vetor

        echo "<br>";
        
        $cont2 = str_word_count($nome, 2); #Cria um vetor com as palavras
        print_r($cont2); #Exibe o vetor mantendo as posições

        echo "<br>";
        $site = "Curso em video";
        $vetor = explode(" ", $site); #explode o espaço em branco
        print_r($vetor);

        echo "<br>";
        $vetor2 = str_split($site);
        print_r($vetor2);

        echo "<br>";
        $e[0] = "Daniel";
        $e[1] = "está";
        $e[2] = "aprendendo";
        $frase = implode("#", $e);
        print($frase);

        echo "<br>";

        $frase2 = join("@", $e);
        echo $frase2;

        $letra = chr(67);
        echo "<br>A letra de código 67 é $letra";

        $letra2 = "b";
        $cod = ord($letra2);
        echo "<br>A letra b possui o código $cod";

    ?>
    
</body>
</html>