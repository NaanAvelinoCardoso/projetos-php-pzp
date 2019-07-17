<?php
session_start();
require 'config.php';

if (isset($_POST['titular']) && empty($_POST['titular']) == false) {
	$titular = addslashes($_POST['titular']);
	$agencia = addslashes($_POST['agencia']);
	$conta = addslashes($_POST['conta']);
	$senha = addslashes($_POST['senha']);


	$sql = "INSERT INTO contas SET titular = :titular AND agencia = :agencia AND conta = :conta AND senha = :senha";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':titular', $titular);
	$sql->bindValue(':agencia', $agencia);
	$sql->bindValue(':conta', $conta);
	$sql->bindValue(':senha', md5($senha));
	$sql->execute();

	echo "<div class='container'>"."<h1>Adicionado com sucesso!</h1>"."</div>";

} else {
	header("Location: adicionar.php");
	exit();
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
		Titular:<br>
		<input type="text" name="titular"><br><br>

		Agencia: <br>
		<input type="text" name="agencia"><br><br>

		Conta:<br>
		<input type="text" name="conta"><br><br>

		Senha:<br>
		<input type="password" name="senha"><br><br>
		<input type="submit" value="Adicionar" class="btn green darken-2"> 
	</form>

	</div>

</body>
</html>