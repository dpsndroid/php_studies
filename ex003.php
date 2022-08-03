<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Terceiro Exemplo PHP</title>
	</head>
	<body>
	<h1>Variáveis em PHP</h1>
	<a href="ex002.php">Exemplo 002</a>
    <a href="ex004.php">Exemplo 004</a>
	<br><br>
	<?php
		$n1 = 3;
        $n2 = 2;
        $soma = $n1 + $n2;
        $media = ($n1 + $n2) / 2;
        echo "<br>A soma entre as variáveis declaradas é $soma";
        echo "<br>A soma vale ".($n1 + $n2);
        echo "<br>A subtração vale ".($n1 - $n2);
        echo "<br>A multiplicação vale ".($n1 * $n2);
        echo "<br>A divisão vale ".($n1 / $n2);
        echo "<br>O módulo vale ". ($n1 % $n2);
        echo "<br>A média é ". ($media);
        $n1 = $_GET["a"];  # recebe os valores esritos na url: ?a=5&b=8
        $n2 = $_GET["b"];
        echo "<br>Os novos valores são $n1 e $n2";
        $v1 = $_GET["a"];
        $v2 = $_GET["b"];
        echo "<br>O valor absoluto de $v2 é ". abs($v2); # obtém o valor absoluto do número
        echo "<br>O valor de $v1<sup>$v2</sup> é igual a: ".pow($v1, $v2); # eleva um número à potencia de outro
        echo "<br>A raiz de $v1 é igual a: ". sqrt($v1);  # obtém a raiz quadrada do número
        echo "<br>O valor arredondado de $v1 é igual a: ". round($v1);
        echo "<br>O valor de $v1 arredondado para baixo é: ". floor($v1); # arredonda para baixo
        echo "<br>O valor de $v1 arredondado para cima é: ". ceil($v1); # arredonda para cima
        echo "<br>A parte inteira de $v1 é: ". intval($v1); # vai pegar apenas a parte inteira
        echo "<br>O número $v1 em moeda é: R$". number_format($v1, 2,",",".");
	?>
	
	</body>
</html>