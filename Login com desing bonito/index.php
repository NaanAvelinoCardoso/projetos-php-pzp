<?php
session_start();
require 'config.php';
require 'class.php';

if (!isset($_SESSION['logado'])) {
  header("Location: login.php");
  exit;
}

$usuarios = new Usuarios($pdo);
$usuarios->setUsuario($_SESSION['logado']);
?>
Sistema
