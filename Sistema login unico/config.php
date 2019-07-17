<?php 
try {
	$pdo = new PDO("mysql:dbname=projeto_loginunico;host=localhost", "root", "");
} catch (PDOException $e) {
    die("FALHOU".$e->getMessage());
    exit;
}
?>