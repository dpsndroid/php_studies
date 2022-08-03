<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 06</title>
</head>
<body>
    <h1>Integração html php</h1>
    <a href="ex005.php">Exemplo 005</a>
    <a href="ex007.php">Exemplo 007</a>
    <br><br>
    <form method = "get" action = "01valor.php">
        valor: <input type = "number" name = "v">
            <input type = "submit" value = "Calcular Raiz">
    </form>
    <br><br><br>
    <form method = "get" action = "02idade.php">
        Nome:<br>
        <input type = "text" name = "nome"><br>
        Ano de nascimento:<br>
        <input type = "number" name = "ano"><br>
        <br>
        <fieldset><legend>Sexo</legend>
            <input type = "radio" name = "sexo" id = "masc" value = "masculino" checked>
            <label for="masc">Masculino</label><br>
            <input type = "radio" name = "sexo" id = "fem" value = "feminino">
            <label for="fem">Feminino</label><br>
        </fieldset><br>
        <input type = "submit" value = "Enviar">
    </form>
    <br><br><br>
    <form method = "get" action = "03cores.php">
        <label for = "itxt">Texto: </label><br>
        <input type = "text" name = "t" id = "itxt"><br>
        <label for = "icor">Cor: </label><cor>
        <input type = "color" name = "cor" id = "icor"><br>
        <label for = "itam">Tamanho: </label>
        <select name = "tam" id = "itam">
            <option value = "8pt">8</option>
            <option value = "10pt">10</option>
            <option value = "14pt">14</option>
            <option value = "20pt">20</option>
            <option value = "40pt">40</option>
        </select><br>
        <input type = "submit" value = "Gerar">
    </form>
</body>
</html>