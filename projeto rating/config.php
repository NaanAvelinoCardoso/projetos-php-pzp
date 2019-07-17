<?php 
try {
	$pdo = new PDO("mysql:dbname=projeto_rating;host=localhost", "root", "");
} catch (Exception $e) {
    echo "FALHOU: ".$e->getMessage();
    exit;
}
?>