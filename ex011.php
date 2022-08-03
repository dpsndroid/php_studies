<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>
<body>
    <a href="ex010.php">Exemplo 010</a>
    <a href="ex012.php">Exemplo 012</a>
    <h1>Repetições parte 3 - For</h1>
    <?php
        for ($i = 1; $i <= 10; $i++){
            echo "$i ";
        }
        echo "<br><br>";
        for ($j = 10; $j >= 1; $j--){
            echo "$j ";
        }
        echo "<br><br>";
        for ($k = 0; $k <= 50; $k+=5){
            echo "$k ";
        }
        echo "<br><br>";
        for ($i = 30; $i >=1; $i-=2){
            echo "$i ";
        }
    ?>
    <br><br>
    <form method="get" action="tabuada.php" >
        Número:
        <select name="sel">
            <?php
            for ($sel = 1; $sel <=10; $sel++){
                echo "<option value =$sel>$sel</option>";
            }
            ?>
        </select>
        <input type="submit" value="Calcular">
    </form>
    <form method="get" action="tabuada.php">
        Número:
        <select name="sel2">
            <?php
            for ($sel2 = 1; $sel2 <=10; $sel2++){
                echo "<option value=$sel2>$sel2</option>";
            }
            ?>
        </select>
        <input type="submit" value="Primo">
</body>
</html>