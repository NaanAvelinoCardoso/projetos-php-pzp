<?php
require 'config.php';
if (isset($_POST['nome']) && !empty($_POST['nome'])) {
  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);

  $pdo->query("INSERT INTO usuarios SET nome = '$nome', email = '$email'");
  $id = $pdo->lastInsertId();     //returna exatamente o ultimo id a ser adicionado.

  $md5 = md5($id);
  $link = 'http://www.meudominio.com/cadastrocomfirma/confirmar.php?h=';

  $assunto = "Confirme seu email!!";
  $msg = "Clique no link abaixo para confirmar o seu cadastro:\n".$link;
  $headers = "From: naanavelino2018@gmail"."\r\n"."X-Mailer: PHP/".phpversion();

  mail($email, $assunto, $msg, $headers);

  echo "OK! Agora confirme seu cadastro no seu email!!";
}
?>
<form method="POST">
  Nome:<br>
  <input type="text" name="nome"><br><br>

  E-mail:<br>
  <input type="email" name="email"><br><br>

  <input type="submit" value="Cadastrar">

</form>
