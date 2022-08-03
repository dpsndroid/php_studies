<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 004</title>
</head>
<body>
<h1>Operadores</h1>
<a href="ex003.php">Exemplo 003</a>
<a href="ex005.php">Exemplo 005</a>
<br><br>
<?php
    $preco = $_GET["p"];
    echo "O preço recebido foi R$ " . number_format($preco, 2) ."<br><br>";
    $preco += ($preco / 100 * 10);
    echo "O preco com 10% de acréscimo é R$ " . number_format($preco, 2) ."<br><br>";
    $preco -= ($preco / 100 * 10);
    echo "O preço com 10% de desconto é R$ " . number_format($preco, 2) ."<br><br>";
    $atual = $_GET["aa"];
    echo "O ano atual é $atual e o ano anterior é ". --$atual."<br><br>";
    # Esse hashtag é para fazer comentário inline
    // Também pode fazer inline com duas barras
    /*
    Este é o formato de comentário multiline, pode fazer em várias linhas
    */
    $a = 3;
    echo "A variável A vale ".$a."<br><br>";
    $b = &$a; # faz com que b seja a referência de a
    $b += 5;
    echo "A variável A vale ".$a."<br><br>";
    echo "A variável B vale ".$b."<br><br>";
    $site = "cursoemvideo";
    $$site = "cursoPHP"; # Vai criar uma variável chamada curso em vídeo com conteúdo curso php
    echo $site."<br><br>";
    echo $cursoemvideo."<br><br>";

?>
</body>
</html>