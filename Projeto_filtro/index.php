<?php
try {
  $pdo = new PDO("mysql:dbname=projeto_filtrotabela;host=localhost", "root", "");
} catch (PDOException $e) {
  echo "FALHOU: ".$e-getMessage();
}

if (isset($_POST['sexo']) && $_POST['sexo'] != '') {
  $sexo = $_POST['sexo'];

  $sql = "SELECT * FROM usuarios WHERE sexo = :sexo";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(":sexo", $sexo);
  $sql->execute();
} else {
  $sexo = '';
  $sql = "SELECT * FROM usuarios";
  $sql = $pdo->query($sql);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap css e fontawesome(icones)-->
    <title>Sistema de Filtro</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  </head>
  <body>
    <!-- Começo do titulo -->
    <h2 class="text-center font-weight-light mb-0 pb-0">[Sistema de Filtro]</h2><br><br>
    <!-- fim do titulo-->
    <hr>
    <div class="list-inline text-right">
    <form class="form container" method="POST">

      <div class="list-inline-item">
      <select class="form-control shadow" name="sexo">
        <option></option>
        <option value="1" <?php echo  ($sexo=='1')?'selected="selected"':'';?>>Masculino</option>
        <option value="0" <?php echo  ($sexo=='0')?'selected="selected"':'';?>>Feminino</option>
      </select>
      </div>

      <div class="list-inline-item">
      <input class="btn btn-outline-secondary shadow" type="submit" value="Filtrar">
      </div>
    </form>
  </div><br>


    <table class="table shadow table-hover table-borderless container">
      <thead class="thead-light">
        <tr>
          <th>NOME:</th>
          <th>SEXO:</th>
          <th>IDADE:</th>
        </tr>
      </thead>
      <tbody>
          <?php
          $sexos = array(
            '1' => 'Masculino',
            '0' => 'Feminino'
          );

          if ($sql->rowCount() > 0){
            foreach ($sql->fetchAll() as $item):
          ?>
          <tr style="cursor: pointer;">
          <td><?php echo $item['nome']; ?></td>
          <td><?php echo $sexos[$item['sexo']]; ?></td>
          <td><?php echo $item['idade']; ?></td>
          </tr>
          <?php
            endforeach;
          }
          ?>
      </tbody>
    </table>
  <!-- jquery, popper, js -->
  <script type="text/javascript" src="assets/jquery/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="assets/popper/popper.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
