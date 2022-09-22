<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
</head>
<body>
    <pre>
    <?php
        require_once "Pessoa.php";
        require_once "Livro.php";
        $pe[0] = new Pessoa("Pedro", 22, "M");
        $pe[1] = new Pessoa("Maria", 31, "F");
        #$li[0] = new Livro("PHP Básico", "José da Silva", 300, $pe[0]);
        $li[1] = new Livro("POO COM PHP", "Maria de Souza", 500, $pe[0]);
        #$li[2] = new Pessoa("PHP Avançado", "Ana Paula", 800, $pe[1]);

        $li[1]->abrir();
        $li[1]->folhear(80);
        $li[1]->detalhes();

    
    ?>
    </pre>
</body>
</html>