<?php
session_start();

$n1 = rand(0, 10);
$n2 = rand(0, 10);

$_SESSION['v'] = $n1 + $n2;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>
	<h1>Verificador de humanos</h1>



	<form method="POST" action="processa.php">
		<?php echo $n1; ?> + <?php echo $n2; ?> =

		<input type="number" name="n" >

		<input type="submit" value="Verificar">
	</form>

</body>
</html>