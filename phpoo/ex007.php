<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>
<body>
    <pre>
    <h1>Herança</h1>
    <?php
        require_once "Pessoas.php";
        require_once "Alunos.php";
        require_once "Professores.php";
        require_once "Funcionarios.php";

        $p1 = new Pessoas();
        $p2 = new Alunos();
        $p3 = new Professores();
        $p4 = new Funcionarios();


        $p1->setNome("Pedro");
        $p2->setNome("Maria");
        $p3->setNome("Claudio");
        $p4->setNome("Fabiana");

        $p2->setCurso("Informática");
        $p3->setSalario(2500.75);
        $p4->setSetor("Estoque");
        $p1->setSexo("M");
        $p2->setSexo("F");
        $p4->setSexo("F");

        $p3->recebAumento(550.20);
        $p4->mudarTrab();
        $p2->cancelMat();

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);


    ?>
    </pre>
</body>
</html>