<?php
	include 'conexao.php'; // conectando-se ao banco de dados

	// recebendo os dados do formulário
	$placa = $_POST['placa'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$chassi = $_POST['chassi'];
	$ano_fab = $_POST['ano_fab'];
	$cor = $_POST['cor'];

	// executando o comando sql (inserindo dados na tabela)
	$sql = mysqli_query($conexao, "INSERT INTO carros (placa, marca, modelo, chassi, ano_fab, cor) VALUES ('$placa', '$marca', '$modelo', '$chassi', '$ano_fab', '$cor')");

	echo "Carro cadastrado com sucesso!";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br><br>
	<a href="cadastro.html">Voltar</a>
</body>
</html>