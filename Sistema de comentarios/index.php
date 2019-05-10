<?php
try {
	# Iniciando a conexão com banco de dados
	$pdo = new PDO("mysql:dbname=projeto_comentarios;host=localhost", "root", "");
} catch (PDOException $e) {
	echo "Falhou: ".$e->getMessage();
	exit;
}


if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
	$nome = addslashes($_POST['nome']);
	$mensagem = addslashes($_POST['mensagem']);

	$sql = $pdo->prepare("INSERT INTO mensagens SET  nome = :nome, msg = :msg, data_msg = NOW()");
	$sql->bindValue(":nome", $nome);
	$sql->bindValue(":msg", $mensagem);
	$sql->execute();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css">
</head>
<body>
	<div class="container">
	<fieldset>
	<form method="POST">
		Nome:
		<input type="text" name="nome"><br><br>

		Mensagem:<br>
		<textarea name="mensagem"></textarea><br><br>

		<input type="submit" value="Enviar mensagem" class="btn green">

	</form>
</fieldset><br><br>

<?php
$sql = "SELECT * FROM mensagens ORDER BY data_msg DESC";
$sql = $pdo->query($sql);
if ($sql->rowCount() > 0) {
	foreach ($sql->fetchAll() as $mensagem):
?>	
	<ul class="collection">
		<li class="collection-item avatar">
			<img src="assets/img/perfil.jpg" alt="" class="circle">
			<span class="title">
				<?php echo $mensagem['nome']; ?><br>
				<strong>Data de envio/hora: <?php echo $mensagem['data_msg']; ?></strong>
			</span><br>
			<p><?php echo $mensagem['msg']; ?></p>
			<hr>
		</li>
	</ul>

<?php
	endforeach;	
} else {
	echo "Não Há mensagem!!";
}


?>
</div>

</body>
</html>




