<?php
try {
  $pdo = new PDO("mysql:dbname=cadastro;host=localhost", "root", "");

} catch (PDOException $e) {
  echo "FALHA: ".$e->getMessage();
}

?>
