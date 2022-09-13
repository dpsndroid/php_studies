<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emoji combat</title>
</head>
<body><pre>
    <?php
        require_once "Lutador.php";
        $l = array();
        $l[0] = new Lutador("Pretty Boy", "Franca", 30, 1.75, 68.9, 11, 2, 1);
        $l[1] = new Lutador("Puttscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $l[2] = new Lutador("Snap Shadow", "EUA", 27, 1.80, 81.6, 11, 2, 1);
        $l[3] = new Lutador("Dead Code", "Australia", 31, 1.69, 77.7, 11, 3, 1);
        $l[4] = new Lutador("Ufocobol", "Zambia", 24, 1.82, 68.9, 11, 2, 2);
        $l[5] = new Lutador("Matusquela", "Paraguai", 34, 1.87, 84.1, 11, 1, 1);
        $l[3]->empatarLuta();
        $l[3]->status();
        $l[3]->apresentar();

    ?></pre>
</body>
</html>