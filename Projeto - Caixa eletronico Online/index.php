<?php
session_start();
require 'config.php';

if (isset($_SESSION['banco']) && empty($_SESSION['banco']) == false) {
	$id = $_SESSION['banco'];

	$sql = $pdo->prepare("SELECT * FROM contas WHERE id = :id");
	$sql->bindValue(':id', $id);
	$sql->execute();

	if ($sql->rowCount() > 0) {
		$info = $sql->fetch();
	} else {
		header("Location: login.php");
		exit();
	}	

} else {
	header("Location: login.php");
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
	<h1>Banco XYZ</h1>
	
	<h5>Titular: <?php echo $info['titular']; ?></h5>
	<h5>Agencia: <?php echo $info['agencia']; ?></h5>
	<h5>Conta: <?php echo $info['conta']; ?></h5>
	<h5>Saldo: <?php echo $info['saldo']; ?></h5><br>
	
	<a href="sair.php" class="btn red">Sair</a><br>
	<hr><br>
	<h3>Movimentaçâo/Extrato</h3>

	<a href="add-transacao.php" class="btn waves-effect">Adicionar Transação</a><br>

	<table>
		<tr>
			<th>Data</th>
			<th>Valor</th>
		</tr>
		<?php 
		$sql = $pdo->prepare("SELECT * FROM historico WHERE id_conta = :id_conta");
		$sql->bindValue(':id_conta', $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			foreach ($sql->fetchAll() as $item) {
		?>
		<tr>
			<td><?php  echo date('d/m/Y H:i', strtotime($item['data_operacao'])); ?></td>
			<td>
			<?php  if ($item['tipo'] == 0): ?>
			<span class="green-text">R$<?php echo $item['valor']; ?></span>
			<?php else: ?>
			<span class="red-text">- R$<?php echo $item['valor']; ?></span>
			<?php endif; ?>
			</td>
		</tr>
		<?php
			}
		}
		?>
	</table>
	</div>

</body>
</html>