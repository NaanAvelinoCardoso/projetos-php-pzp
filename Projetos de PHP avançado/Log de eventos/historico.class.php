<?php
class Historico {
  private $pdo;

  public function __construct() {
    $this->pdo = new PDO("mysql:dbname=treinar;host=localhost", "root", "");

  }


  public function registrar($acao) {
    $ip = $_SERVER['REMOTE_ADDR'];    //pega o ip

    $sql = $this->pdo->prepare("INSERT INTO historico SET ip = ?, data_acao = NOW(), acao = ?");
    $sql->execute(array($ip, $acao));
  }
}
