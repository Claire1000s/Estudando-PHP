<?php
	$valor = array();

	for($i = 0; $i < 5; $i++)
	{
		if(isset($_GET['valor']))
		{
			$valor = $_GET['valor'];
		}
	}

	echo "O maior valor é o " . max($valor); // max: Mostra o maior valor dentro de um array.
?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<title>Exercício 2 - PHP</title>
	</head>

	<body>
		<h1>Exercício 2</h1>
		<h3>2 – Digite 5 números e verifique qual é o maior.</h3>
		<form action="arrays02.php" name="cadastro" method="get">
			<label>Valor 1: </label><input type="text" size="5" name="valor[]">&nbsp;
			<label>Valor 2: </label><input type="text" size="5" name="valor[]">&nbsp;
			<label>Valor 3: </label><input type="text" size="5" name="valor[]">&nbsp;
			<label>Valor 4: </label><input type="text" size="5" name="valor[]">&nbsp;
			<label>Valor 5: </label><input type="text" size="5" name="valor[]">
			<br /><br />
			<input type="submit" value="Calcular">
		</form>
	</body>
</html>