<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Pessoais</title>
</head>
<body>
    <h1>Resultado</h1>
    <a href = "ex006.php">Voltar</a>
    <br><br>
    <?php
        /*
         isset é para resolver se a página for aberta sem a passagem de parâmetro
        senão passado, exibe não informado
        */
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]"; 
        $ano = isset($_GET["ano"])?$_GET["ano"]:"[não informado]";
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[não informado]";
        echo "Seu nome é $nome, você nasceu em $ano e seu sexo é $sexo";
        $idade = date("Y") - $ano; #Y mostra a ano com 4 números, y mostra os 2 últimos
        echo "<br>$nome tem $idade anos";
    ?>
</body>
</html>