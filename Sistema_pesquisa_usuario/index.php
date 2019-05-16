<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap css e fontawesome(icones)-->
    <title>Sistema de pesquisa</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  </head>
  <body>
    <!-- Começo do titulo e form -->
    <h2 class="text-center font-weight-light">[Sistema de Pesquisa] Digite email ou cpf do usuario</h2><br><br>
    <div class="row pb-4">
      <div class="container col-sm-12 col-md-12 col-lg-4 col-xl-4 offset-5">
        <form method="GET" class="form form-inline">
          <input class="form-control" type="text" name="campo" placeholder="Digite um email/cpf para">
          <input class="btn btn-success ml-2" type="submit" value="Pesquisar">
        </form>
      </div>
    </div>
    <!-- fim do titulo e form -->
    <hr>

    <?php
    #Verifica se o campo do form esta preencido e retorna os resultado se tiver preencido
    if (!empty($_GET['campo'])) {
      $campo = addslashes($_GET['campo']);

      try {
        $pdo = new PDO("mysql:dbname=projeto_pesquisacolunas;host=localhost", "root", "");
      } catch (PDOException $e) {
        echo "FALHOU: ".$e->getMessage();
        exit();
      }


      $sql = "SELECT * FROM usuarios WHERE email = :email OR cpf = :cpf";
      $sql = $pdo->prepare($sql);
      $sql->bindValue(":email", $campo);
      $sql->bindValue(":cpf", $campo);
      $sql->execute();

      if ($sql->rowCount() > 0) {
        $sql = $sql->fetch();
      echo "<div class='container p-3 shadow border border-light rounded mt-4'>";
      echo "<div class='h3 list-inline text-center p-1'>ID: "."<div class='list-inline-item'>".$sql['id']."</div>"."</div>";
      echo "<div class='h3 list-inline text-center p-1'>EMAIL: "."<div class='list-inline-item'>".$sql['email']."</div>"."</div>";
      echo "<div class='h3 list-inline text-center p-1'>CPF: "."<div class='list-inline-item'>".$sql['cpf']."</div>"."</div>";
      echo "<div class='h3 list-inline text-center p-1'>NOME: "."<div class='list-inline-item'>".$sql['nome']."</div>"."</div>";
      echo "</div>";
      }
    }
    ?>

  <!-- jquery, popper, js -->
  <script type="text/javascript" src="assets/jquery/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="assets/popper/popper.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
