<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
</head>
<body>
    <a href="ex014.php">Exemplo 014</a>
    <a href="ex016.php">Exemplo 016</a>
    <h1>Manipulando strings - parte 2</h1>
    <?php
        $nome = "Daniel portella";
        $nome2 = strtolower($nome);
        echo "<br>Seu nome é $nome2 em minúsculas";
        
        $nome3 = strtoupper($nome);
        echo "<br>Seu nome é $nome3 em maiúsculas";
        
        $nome4 = ucfirst($nome);
        echo "<br>Seu nome é $nome4 com a primeira maiúscula";
        
        $nome5 = ucwords($nome);
        echo "<br>Seu nome é $nome5 com maiúsculas na primeira letra das palavras";
        
        $nome6 = strrev($nome);
        echo "<br>Seu nome é $nome6 ao contrário";
        
        $frase = "<br>Estou aprendendo PHP";
        $pos = strpos($frase, "PHP");
        echo "<br>A string foi encontrada na posição $pos";

        $frase2 = "<br>Estou aprendendo PHP";
        $pos1 = stripos($frase2, "php"); #ignora se for digitado errado, como maiúscula ou minúscula
        echo "<br>A string foi encontrada na posição $pos1";

        $frase3 = "<br>Estou aprendendo PHP no curso em vídeo de PHP";
        $pos2 = substr_count($frase3, "PHP"); #conta quantas vezes a palavra mencionada é impressa no texto. Difere entre maiúsculas e minúsculas
        print("<br>PHP encontrado $pos2 vezes");

        $page = "Curso em Video";
        $sub = substr($page, 0, 5); # 0 é a posicão e 5, a quantidade de letras
        echo "<br>". $sub;

        $sub2 = substr($page, -5, 3); # conta as últimas cinco, e só exibe as 3 primeiras delas
        echo "<br>". $sub2;

        $novo = str_pad($nome, 30," ", STR_PAD_RIGHT);
        print("<BR>Meu professor $novo é lindo");

        $txt = str_repeat("Daniel ",5);
        print("<br>O texto gerado foi $txt");
        echo "<br>";
        print(str_repeat("-", 67));

        $texto = "Gosto de estudar Matemática. Matemática é muito legal";
        $novotexto = str_replace("Matemática", "PHP", $texto);
        print("<br>". $novotexto);

        $novotexto2 = str_ireplace("matemática", "PHP", $texto); #ignora maiúsculas e minúsculas
        print("<br>". $novotexto2);




    ?>
</body>
</html>