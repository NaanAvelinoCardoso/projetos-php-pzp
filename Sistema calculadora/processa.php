<?php
if (!empty($_POST['num1']) && !empty($_POST['num2']) && !empty($_POST['op'])) {
	
	$num1 = floatval($_POST['num1']);
	$num2 = floatval($_POST['num2']);
	$op = $_POST['op'];

	switch ($op) {
		case '+':
			$conta = $num1 + $num2;
			echo $num1." + ".$num2." = ".$conta;
			break;

		case '-':
			$conta = $num1 - $num2;
			echo $num1." - ".$num2." = ".$conta;
			break;

		case '*':
			$conta = $num1 * $num2;
			echo $num1." * ".$num2." = ".$conta;
			break;

		case '/':
			$conta = $num1 / $num2;
			echo $num1." / ".$num2." = ".$conta;
			break;
		
	}
} else {
	header("Location: index.php");
}

?>