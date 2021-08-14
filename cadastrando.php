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
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css"/>
</head>
<body>
	<div class="box">
		<label class>Cadastrado com sucesso</label>
		<br><br>
		<a class="button is-info is-outlined" href="cadastro.html">Voltar</a>
	</div>
</body>
</html>