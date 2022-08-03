<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados condicional switch</title>
</head>
<body>
    <h1>Resultado</h1>
    <a href = "ex008.php">Voltar</a>
    <br><br>
    <?php
       $n = isset($_GET["num"])?$_GET["num"]:0;
       $o = isset($_GET["oper"])?$_GET["oper"]:1;
       switch ($o){
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = $n ^ 3;
                break;
            case 3:
                $r = sqrt($n);
       }
       echo "O resultado da solicitação foi $r";
       $d = isset($_GET["ds"])?$_GET["ds"]:0;
       switch ($d) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "<br>levanta e vai estudar";
                break;
            case 7:
            case 8:
                echo "<br>Descansa que é FDS";
                break;
            default:
                echo "<br>Dia da semana inválido";
            }
    ?>
</body>
</html>