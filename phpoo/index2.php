<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index 2</title>
</head>
<body>
    <h1>Operações bancárias</h1>
    <pre>
    <?php
        require_once "ex003.php";
        $p1 = new ContaBanco();
        $p2 = new ContaBanco();
        $p1->abrirConta("CC");
        $p1->setDono("Jubileu");
        $p2->abrirConta("CP");
        $p2->setDono("Creuza");
        $p1->setnumConta("1111");
        $p2->setnumConta("2222");
        $p1->depositar(300);
        $p2->depositar(500);
        $p2->sacar(100);
        print_r($p1);
        print_r($p2);
    ?>
    </pre>
</body>
</html>