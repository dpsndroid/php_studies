<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Segundo Exemplo PHP</title>
	</head>
	<body>
	<h1>Variáveis em PHP</h1>
	<a href="index2.php">Página index2</a><a href="ex003.php">Exemplo 003</a>
	<br><br>
	<?php
		$idade = 3;
		$salario = 1825.54;
		$nome = "Leonardo";
		$casado = false;
		echo "números inteiros = (int) ou (integer)";
		echo "números reais = (real), (float), (double)";
		echo "Caractere = (string)";
		echo "lógico = (???)";
		echo $nome;
		$nome2 = (string) "Daniel";
		echo $nome2;
		$nome3 = (int) "Daniel";
		echo $nome3;
		$nome4 = (int) "10Daniel";
		echo $nome4;
		$nome5 = (int) "Daniel10";
		echo $nome5;
		echo $nome2. " tem ". $idade. " anos.";
		echo "$nome2 tem $idade anos";
	
	?>
	
	</body>
</html>