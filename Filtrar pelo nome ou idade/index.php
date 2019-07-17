<?php
try {
	# Iniciando a conexão com banco de dados
	$pdo = new PDO("mysql:dbname=projeto_ordenar;host=localhost", "root", "");
} catch (PDOException $e) {
	echo "Falhou: ".$e->getMessage();
	exit;
}
# Verificação do ordem
if (isset($_GET['ordem']) && empty($_GET['ordem']) == false) {
	$ordem = addslashes($_GET['ordem']); 
	$sql = "SELECT * FROM usuarios ORDER BY ".$ordem;
}else {
	$ordem = '';
	$sql = "SELECT * FROM usuarios";
}
?>
<form method="GET">
	Filtrar:
	<select name="ordem"  onchange="this.form.submit()">
		<option></option>
		<option value="nome" <?php echo ($ordem=="nome")?'selected="selected"':''; ?>>Pelo nome</option>
		<option value="idade" <?php echo ($ordem=="idade")?'selected="selected"':''; ?>> Pela idade</option>
	</select>
</form>


<table border="1" width="100%">
	<tr>
		<th>Nome</th>
		<th>Idade</th>
	</tr>
	<?php
	
	$sql = $pdo->query($sql);
	if ($sql->rowCount() > 0) {

		foreach ($sql->fetchAll() as $usuario):
	?>
			<tr>
				<td><?php echo $usuario['nome']; ?></td>
				<td> <?php echo $usuario['idade']; ?></td>
			</tr>
	<?php

		endforeach; 
	}
	?>
</table>