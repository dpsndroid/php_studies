<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fatorial</title>
</head>
<body>
    <h1>Resultado Fatorial</h1>
    <a href = "ex010.php">Voltar</a>
    <br><br>
    <?php
        $b = isset($_GET["val"])?$_GET["val"]:0;
        $e = $b;
        $fat = 1;
        do {
            echo $e. " ";
            $fat *= $e;
            $e --;
        } while ($e > 0);
        echo "<br>O resultado do fatorial de $b é $fat";
        $w = isset($_GET["sel"])?$_GET["sel"]:0;
        $ini = 1;
        echo "<br><br>Mostrando a tabuada de $w";
        do {
            $multi = $w * $ini;
            echo "<br>$w x $ini = $multi";
            $ini ++;    
        } while ($ini < $w + 1);
    ?>
</body>
</html>