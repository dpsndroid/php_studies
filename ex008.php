<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
</head>
<body>
    <h1>Estrutura condicional switch</h1>
    <a href="ex007.php">Exemplo 007</a>
    <a href="ex009.php">Exemplo 009</a>
    <br><br>
    <form method = "get" action = "exercicio02.php">
        Numero: <input type = "number" name = "num" required> 
        <!--required obriga a preencher o campo-->
        <br><br>
        <fieldset><legend>Operação</legend>
            <input type="radio" name="oper" id="dobro" value="1" checked>
            <label for="dobro">Dobro</label>
            <input type="radio" name="oper" id="cubo" value="2">
            <label for="cubo">Cubo</label>
            <input type="radio" name="oper" id="raiz" value="3">
            <label for="raiz">Raiz Quadrada</label>
        </fieldset>
        <br>
        <input type = "submit" value = "Calcular">
    <br><br>
    <form method="get" action="exercicio02.php">
        Dia da semana: <input type="number" name="ds" min="2" max="8" required>
        <input type="submit" value="Analisar">
    </form>
</body>
</html>