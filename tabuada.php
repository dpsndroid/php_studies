<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado tabuada</title>
</head>
<body>
    <h1>Resultado</h1>
    <a href="ex011.php">Voltar</a>
    <br><br>
    <?php
        $n = isset($_GET["sel"])?$_GET["sel"]:0;
            for ($c = 1; $c <=10; $c++ ){
                $mul = $n * $c;
                echo "<br>$n x $c = $mul";
        }
        echo "<br><br>";
        $p = isset($_GET["sel2"])?$_GET["sel2"]:0;
            for ($c = $p; $c >=1; $c-- ){
                if ($c % 2 == 1){
                    echo "$c ";
                }
            }
    ?>
</body>
</html>