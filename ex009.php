<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 09</title>
</head>
<body>
    <h1>Repetição com While</h1>
    <a href="ex008.php">Exemplo 008</a>
    <a href="ex010.php">Exemplo 010</a>
    <br><br>
    <?php
        $n = 1; # acrescentando até 20
        while ($n <= 20) {
            echo  $n . ", ";
            $n ++;
        }
        echo "<br><br>";
        $m = 10; #decrementando até 1
        while ($m >= 1) {
            echo $m . ", ";
            $m --;
        }
        echo "<br><br>";
        $j = 30;
        while ($j >= 1) {
            echo $j. ", ";
            $j -=2;  # decrementa pulando 5 casas
        }
        echo "<br><br>";
        $r = 1;
        while ($r <= 100) {
            echo $r. ", ";
            $r += 5; # incrementa pulando 5 casas
        }
    ?>
    <br><br>
    <form method="get" action="ex009b.php">
        <?php
        $s = 1;
        while ($s <= 5) {
            echo "Valor $s: <input type='number' name='v$s' max='100' min='0' value='0'><br>";
            $s ++;
        }
        ?>
        <input type="submit" value="Enviar" class="botao">
    </form>
    <br><br>
    <form method="get" action="ex009b.php">
        Início: <input type="number" name="ini" ><br>
        Fim   : <input type="number" name="fim" ><br>
        Intervalo: <input type="number" name="int" min="1" max="6"><br>
        <input type="submit" value="Enviar" class="botao2"> 
</body>
</html>