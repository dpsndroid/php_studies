<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $txt = isset($_GET["t"])? $_GET["t"]:"Não informado"; 
        $cor = isset($_GET["cor"])? $_GET["cor"]:"#000000"; 
        $tam = isset($_GET["tam"])? $_GET["tam"]:"12pt"; 
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Pessoais</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <h1>Resultado</h1>
    <a href = "ex006.php">Voltar</a>
    <br><br>
    <?php
        echo "<span class = 'texto'>$txt</span>";
    ?>
</body>
</html>