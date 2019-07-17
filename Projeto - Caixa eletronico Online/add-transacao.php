<?php
session_start();
require 'config.php';
if (isset($_POST['tipo'])) {
	$tipo = $_POST['tipo'];
	$valor = str_replace(",", ".", $_POST['valor']);
	$valor = floatval($valor);

	$sql = $pdo->prepare("INSERT INTO historico (id_conta, tipo, valor, data_operacao) VALUES (:id_conta, :tipo, :valor, NOW())");
	$sql->bindValue(':id_conta', $_SESSION['banco']);
	$sql->bindValue(':tipo', $tipo);
	$sql->bindValue(':valor', $valor);
	$sql->execute();

	if ($tipo == '0') {
		//Depósito
		$sql = $pdo->prepare("UPDATE contas SET saldo = saldo + :valor WHERE id = :id");
		$sql->bindValue(':valor', $valor);
		$sql->bindValue(':id', $_SESSION['banco']);
		$sql->execute();

	} else {
		//Saque
		$sql = $pdo->prepare("UPDATE contas SET saldo = saldo - :valor WHERE id = :id");
		$sql->bindValue(':valor', $valor);
		$sql->bindValue(':id', $_SESSION['banco']);
		$sql->execute();
	}

	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Caixa Eletrônico</title>
	<link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css">

</head>
<body>
	<div class="container">
	<form method="POST">
		<div class="input-field">
		Tipo de transação:<br>
		<select name="tipo" class="browser-default">
			<option value="0">Depósito</option>
			<option value="1">Retirada</option>
		</select><br>
		</div>

		Valor:<br>
		<input type="text" name="valor" pattern="[0-9.,]{1,}"><br>
		<input type="submit" value="Adicionar" class="btn waves-effect">
	</form>
	</div>

	<script src="assets/js/materialize.min.js"></script>
	<script type="text/javascript" >
		$(document).ready(function(){
	    $('select').formSelect();
	  	});
	</script>
</body>
</html>