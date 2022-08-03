<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados condicional if</title>
</head>
<body>
    <h1>Resultado</h1>
    <a href = "ex007.php">Voltar</a>
    <br><br>
    <?php
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $idade = date("Y") - $a;
        echo "<br>Você nasceu em $a";
        echo "<br>Você tem $idade anos de idade";
        if($idade >= 18) {
            $v = "já pode votar";
            $d = "Já pode dirigir";
        }
        else {
            $v = "não pode votar";
            $d = "não pode dirigir";
        }
        echo "<br>Com essa idade, você $v e $d";
        if($idade < 16){
            $tipovoto = "proibido";
        }
        else{
            if(($idade >= 16 && $idade < 18) || ($idade > 65)) {
                $tipovoto = "opcional";
            }
            else{
                $tipovoto = "obrigatório";
            }
        }
        echo "<br>Nessa eleição o seu voto é $tipovoto";
        # Outra opção usando elseif - mais simples
        if($idade < 16){
            $tipovoto = "proibido";
        }
        elseif(($idade >= 16 && $idade < 18) || ($idade > 65)) {
            $tipovoto = "opcional";
        }
        else{
            $tipovoto = "obrigatório";
        }
        echo "<br>Nessa eleição o seu voto é $tipovoto";
    ?>
</body>
</html>