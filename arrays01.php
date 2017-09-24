<?php
	$valor = array();

	for($i = 0; $i < 10; $i++)
	{
		if(isset($_POST['valor']))
		{
			$valor = $_POST['valor'];
		}
	}
	
	foreach($valor as $v)
	{
		$media = array_sum($valor) / 10; // array_sum: Faz a soma dos elementos de um array.
	}

	echo "Media: " . $media . "<br />";	
?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<title>Exercício 1 - PHP</title>
	</head>

	<body>
		<h1>Exercício 1</h1>
		<h3>1 – Calcule a média de 10 números digitados pelo usuário.</h3>

		<form action="arrays01.php" name="cadastro" method="post">
			<label>Valor 1: </label><input type="text" size="10" name="valor[]">
			<br />
			<label>Valor 2: </label><input type="text" size="10" name="valor[]">
			<br />
			<label>Valor 3: </label><input type="text" size="10" name="valor[]">
			<br />
			<label>Valor 4: </label><input type="text" size="10" name="valor[]">
			<br />
			<label>Valor 5: </label><input type="text" size="10" name="valor[]">
			<br />
			<label>Valor 6: </label><input type="text" size="10" name="valor[]">
			<br />
			<label>Valor 7: </label><input type="text" size="10" name="valor[]">
			<br />
			<label>Valor 8: </label><input type="text" size="10" name="valor[]">
			<br />
			<label>Valor 9: </label><input type="text" size="10" name="valor[]">
			<br />
			<label>Valor 10: </label><input type="text" size="10" name="valor[]">
			<br /><br />
			<input type="submit" value="Calcular">
		</form>
	</body>
</html>