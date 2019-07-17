<?php
session_start();
require 'config.php';
require 'class.php';

if (!empty($_POST['email'])) {
  $email = addslashes($_POST['email']);
  $senha = addslashes(md5($_POST['senha']));

  $usuarios = new Usuarios($pdo);


  if ($usuarios->fazerLogin($email, $senha)) {
    header("Location: index.php");
    exit;
  } else {
    echo "<span class='alert alert-warning p-2 rounded'>Email ou senha está incorretoas.<span>";
  }
}
?>
<html lang="pt-br">
  <head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap css e fontawesome(icones)-->
    <title>Sistema de Permissoes de usuarios</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  </head>
  <body>
    <div class="row">
      <div class="col col-sm-12 col-lg-3 col-xl-3 offset-4 push-3">
        <div class=" bg-light text-center rounded pt-3 shadow ml-4" style="margin-top: 200px;">
          <h4 class="bg-dark text-light p-3">Área de login | Naan</h4>
            <form class="form pb-4 " method="POST">
              <span class="font-weight-light">EMAIL:</span><br>
              <input class="" type="email" name="email"><br><br>

              <span class="font-weight-light">SENHA:</span><br>
              <input class="" type="password" name="senha"><br><br>

              <input type="submit" class="btn btn-success btn-lg" value="Entrar">
            </form>
        </div>
      </div>
    </div>



  <!-- jquery, popper, js -->
  <script type="text/javascript" src="assets/jquery/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="assets/popper/popper.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
