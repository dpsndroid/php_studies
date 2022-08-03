<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body>
    <h1>Repetição com teste lógico no final (Repita)</h1>
    <a href="ex009.php">Exemplo 009</a>
    <a href="ex011.php">Exemplo 011</a>
    <br><br>
    <?php
       $c = 1;
       do {
        echo $c. " ";
        $c ++;
       } while ($c <= 10);
       $d = 30;
    ?>
    <br>
    <?php
       do {
        echo $d. " ";
        $d --;
       } while ($d >= 1);
    ?>
    <br><br>
    <form method="get" action="fatorial.php">
        Valor: <input type="number" name="val">
               <input type="submit" value="Fatorial">
    </form>
    <br>
    <form method="get" action="fatorial.php">
       Número: <select name="sel">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
    <input type="submit" value="Tabuada">
    </form>
</body>
</html>