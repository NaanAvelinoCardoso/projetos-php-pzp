<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>
	<form method="POST" action="processa.php">
		<input type="number" name="num1" >
		<select name="op">
			<option>+</option>
			<option>-</option>
			<option>*</option>
			<option>/</option>
		</select>
		<input type="number" name="num2">
		<input type="submit" value="Calcular">
	</form>

</body>
</html>