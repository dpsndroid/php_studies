<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <?php
        require_once "ControleRemoto.php";
        $c = new ControleRemoto();
        $c->ligar();
        $c->maisVolume();
        $c->abrirMenu();
    ?>
</body>
</html>